/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

table_array = [];
function QuotesEditManager() {
    this.count = 0;
    this.openPopup = function(value, count) {
        var popup_request_data = {
            'call_back_function': 'set_product_return',
            'form_name': 'EditView',
            'field_to_name_array': {
                'id': 'id',
                'name': 'name',
                'cost_usdollar': 'cost_usdollar',
                'list_usdollar': 'list_usdollar',
                'discount_usdollar': 'discount_usdollar',
                'mft_part_num': 'mft_part_num',
                'pricing_factor': 'pricing_factor',
                'type_id': 'type_id',
                'tax_class': 'tax_class',
                'tax_class_name': 'tax_class_name',
                'description': 'description'

            },
            'passthru_data': {
                'row_id': count
            }
        };
        open_popup('ProductTemplates', 600, 400, '&tree=ProductsProd&name=' + value, true, false, popup_request_data);
    };

    this.toReadOnly = function(doc, count) {
        if (doc.getElementById('product_template_id_' + count).value != '') {
            this.toggleTaxSelect(doc, count, true);
            this.setToReadOnly(doc.getElementById('cost_price_' + count));
            this.setToReadOnly(doc.getElementById('list_price_' + count));
            //setToReadOnly(doc.getElementById('discount_price_'+ count ));
            this.setToReadOnly(doc.getElementById('tax_class_name_' + count));
            this.setToReadOnly(doc.getElementById('mft_part_num_' + count));
            //setToReadOnly(doc.getElementById('pricing_formula_name_'+count));
        } else {
            this.toEdit(doc, count);
        }
    };

    this.setToReadOnly = function(element) {
        element.style.background = '#dddddd';
        element.readOnly = true;
    };

    this.toEdit = function(doc, count) {
        this.toggleTaxSelect(doc, count, false);
        this.setToEdit(doc.getElementById('cost_price_' + count));
        this.setToEdit(doc.getElementById('list_price_' + count));
        this.setToEdit(doc.getElementById('discount_price_' + count));
        this.setToEdit(doc.getElementById('tax_class_name_' + count));
        this.setToEdit(doc.getElementById('mft_part_num_' + count));
        //setToEdit(doc.getElementById('pricing_formula_name_'+count));

    };

    this.setToEdit = function(element) {
        element.style.background = '#ffffff';
        element.readOnly = false;
    };

    this.taxSelectChanged = function(doc, count) {
        doc.getElementById('tax_class_' + count).value = doc.getElementById('tax_class_select_name_' + count).options[doc.getElementById('tax_class_select_name_' + count).selectedIndex].value;
        this.calculate(doc);
    };

    /*function priceSelectChanged(doc, count){
     doc.getElementById('pricing_formula_' + count).value = doc.getElementById('pricing_formula_select_name_' + count).options[doc.getElementById('pricing_formula_select_name_' + count).selectedIndex].value;
     calculate(doc);
     }*/
    this.selectTax = function(doc, count) {
        if (doc.getElementById('tax_class_name_' + count).value != '') {
            for (var i = 0; i < doc.getElementById('tax_class_select_name_' + count).options.length; i++) {
                if (doc.getElementById('tax_class_select_name_' + count).options[i].value == doc.getElementById('tax_class_name_' + count).value) {
                    doc.getElementById('tax_class_select_name_' + count).selectedIndex = i;
                    return;
                }
            }
        }
    };


    this.discount_calculated = function(doc, count) {
        var discountAmount;
        if (doc.getElementById('checkbox_select_' + count).checked == true) {
            var _discountPrice = doc.getElementById('discount_price_' + count).value,
                _discountAmount = doc.getElementById('discount_amount_' + count).value,
                _quantity = doc.getElementById('quantity_' + count).value;

            doc.getElementById('discount_select_' + count).value = true;

            _quantity = unformatNumber(_quantity, num_grp_sep, dec_sep);
            _discountPrice = unformatNumber(_discountPrice, num_grp_sep, dec_sep);
            _discountAmount = unformatNumber(_discountAmount, num_grp_sep, dec_sep);
             discountAmount = (_quantity * _discountPrice) * (_discountAmount / 100);
        }
        else {
            doc.getElementById('discount_select_' + count).value = false;
            discountAmount = unformatNumber(doc.getElementById('discount_amount_' + count).value, num_grp_sep, dec_sep);
        }
        doc.getElementById('deal_calc_' + count).value = discountAmount;
        this.calculate(doc);
    };


    this.holding_row_id = '';

    this.copy_cell_children = function(from_cell, to_cell) {

    };


    this.ungrab_table_row = function() {

        if (this.holding_row_id != '') {

            var from_row = document.getElementById(this.holding_row_id);
            if (typeof(from_row) == 'undefined' || !from_row) {
                this.holding_row_id = '';
                return;
            }
            this.holding_row_id = '';
            from_row.style.background = '';
        }
    };

    this.grab_table_row = function(row_id) {
        if (this.holding_row_id == '') {
            this.holding_row_id = row_id;
            var from_row = document.getElementById(this.holding_row_id);
            from_row.style.background = '#666666';
        } else {
            var from_row = document.getElementById(this.holding_row_id);
            if (typeof(from_row) == 'undefined' || !from_row) {
                this.holding_row_id = '';
                return;
            }
            var from_table = document.getElementById(from_row.tableId);
            if (typeof(from_table) == 'undefined' || !from_table) {
                this.holding_row_id = '';
                return;
            }
            var from_body = from_table.tBodies[0];
            var from_index = from_row.rowIndex;
            var from_count = from_row.count;
            from_row.style.background = '';
            var to_row = document.getElementById(row_id);
            to_row.style.background = '';
            var to_table = document.getElementById(to_row.tableId);
            var to_body = to_table.tBodies[0];
            var to_index = to_row.rowIndex;
            var to_count = to_row.count;
            if (to_index < from_index) {
                temp_id = this.holding_row_id;
                this.holding_row_id = row_id;
                return this.grab_table_row(temp_id);
            }

            var to_offset = 0;
            if (to_table != from_table) {
                to_offset++;
            }


            //swap the table id's the use for getting table information
            var tempId = from_row.tableId;
            from_row.tableId = to_row.tableId;
            to_row.tableId = tempId;
            //handle the inserts
            this.lookup_item('parent_group_' + to_count, document).value = to_row.tableId;
            this.lookup_item('parent_group_' + from_count, document).value = from_row.tableId;
            this.lookup_item('parent_group_index_' + from_count, document).value = to_index;
            this.lookup_item('parent_group_index_' + to_count, document).value = from_index;

            var from_position = this.lookup_item('parent_group_position_' + from_count, document).value;
            var to_position = this.lookup_item('parent_group_position_' + to_count, document).value;
            this.lookup_item('parent_group_position_' + from_count, document).value = to_position;
            this.lookup_item('parent_group_position_' + to_count, document).value = from_position;


            //alert('t0 ' +to_row.tableId + ' == ' + this.lookup_item('parent_group_' + to_count , document).value);
            to_body.insertBefore(from_row, to_row);

            var insertTo = to_index + to_offset;
            var insertFrom = from_index;
            if (insertTo >= to_body.rows.length)
                insertTo = to_body.rows.length - 1;
            if (insertFrom >= from_body.rows.length) {
                insertFrom = 0;
            }


            if (insertFrom == 0) {
                from_body.appendChild(to_body.rows[insertTo]);
            } else {
                from_body.insertBefore(to_body.rows[insertTo], from_body.rows[insertFrom]);
            }
            this.holding_row_id = '';

            //recalulate
            this.calculate(document);
        }
    };

    this.toggleTaxSelect = function(doc, count, hideselect) {
        if (hideselect) {
            doc.getElementById('taxselect' + count).style.display = 'none';
            doc.getElementById('taxinput' + count).style.display = 'inline';
            //doc.getElementById('priceselect' + count).style.display = 'none';
            //doc.getElementById('priceinput' + count).style.display = 'inline';


        } else {
            doc.getElementById('taxselect' + count).style.display = 'inline';
            this.selectTax(doc, count);
            //priceSelectChanged(doc, count);
            doc.getElementById('taxinput' + count).style.display = 'none';
            //doc.getElementById('priceselect' + count).style.display = 'inline';
            //doc.getElementById('priceinput' + count).style.display = 'none';
            doc.getElementById('tax_class_' + count).value = doc.getElementById('tax_class_select_name_' + count).options[doc.getElementById('tax_class_select_name_' + count).selectedIndex].value;
        }
    };

    this.tax_rate_keys = new Array();
    this.tax_rates = new Array();
    this.add_tax_class = function(name, value) {
        this.tax_rate_keys.push(name);
        this.tax_rates[name] = value;
    };



    var item_list_MSI = new Array();
    this.lookup_item = function(id, doc) {
        if (typeof(item_list_MSI[id]) != 'undefined') {
            return item_list_MSI[id];
        }
        return doc.getElementById(id);
    };

    this.default_product_status = 'UNSET';
    this.invalidAmount = 'UNSET';
    this.selectButtonTitle = 'UNSET';
    this.selectButtonKey = 'UNSET';
    this.selectButtonValue = 'UNSET';
    this.deleteButtonName = 'UNSET';
    this.deleteButtonConfirm = 'UNSET';
    this.deleteGroupConfirm = 'UNSET';
    this.deleteButtonValue = 'UNSET';
    this.addRowName = 'UNSET';
    this.addRowValue = 'UNSET';
    this.deleteTableName = 'UNSET';
    this.deleteTableValue = 'UNSET';
    this.subtotal_string = 'UNSET';
    this.shipping_string = 'UNSET';
    this.deal_tot_string = 'UNSET';
    this.new_sub_string = 'UNSET';
    this.total_string = 'UNSET';
    this.tax_string = 'UNSET';
    this.addGroupName = 'UNSET';
    this.addGroupValue = 'UNSET';

    this.addCommentName = 'UNSET';
    this.addCommentValue = 'UNSET';
    this.deleteCommentName = 'UNSET';
    this.deleteCommentValue = 'UNSET';
    this.deleteCommentConfirm = 'UNSET';
    this.list_quantity_string = 'UNSET';
    this.list_product_name_string = 'UNSET';
    this.list_mf_part_num_string = 'UNSET';
    this.list_taxclass_string = 'UNSET';
    this.list_cost_string = 'UNSET';
    this.list_list_string = 'UNSET';
    this.list_discount_string = 'UNSET';
    this.list_deal_tot = 'UNSET';
    this.check_data = 'UNSET';

    this.table_list = new Array();
    this.blankDataLabel = document.createElement('td');
    this.blankDataLabel.className = 'dataLabel';
    this.blankDataLabel.width = 90;
    this.blankDataLabel.nowrap = true;

    this.deleteTable = function(id) {
        table_array[id].splice(id, 1);
        this.ungrab_table_row();
        this.lookup_item('delete_table_' + id, document).value = id;
        var table = this.lookup_item(id, document);
        var table_tally = this.lookup_item(id + '_tally', document);
        var table_header = this.lookup_item(id + '_header', document);
        var tables = document.getElementById('add_tables');
        tables.removeChild(table);
        tables.removeChild(table_tally);
        this.calculate(document);
        tables.removeChild(table_header);
        tables.removeChild(this.lookup_item(id + '_hr1', document));
        tables.removeChild(this.lookup_item(id + '_hr2', document));

    };


    rows_nb_per_group = new Array();
    this.addTable = function(id, bundle_stage, bundle_name, bundle_shipping) {
        if (id == '') {
            id = 'group_' + this.count;
        }
        table_array[id] = new Array();
        rows_nb_per_group[id] = 1;
        var form = $('#EditView')[0];
        var textEl = this.createElement('input', {
            'type': 'hidden',
            'name': 'delete_table[' + id + ']',
            'id': 'delete_table_' + id,
            'value': 1
        });
        item_list_MSI['delete_table[' + id + ']'] = textEl;
        form.appendChild(textEl);

        var tables = $('#add_tables')[0];
        var tableEl = this.createElement('table', {
            'name': id,
            'id': id,
            'border': 0,
            'cellspacing': 1,
            'cellpadding': 0
        });
        item_list_MSI[id] = tableEl;
        var newHR = this.createElement('hr', {
            'id': id + '_hr1'
        });
        var newDIV = this.createElement('div', {
            'id': id + '_header'
        });
        $(newDIV).html(this.getTableSettings(id));
        tables.appendChild(newHR);
        tables.appendChild(newDIV);
        tables.appendChild(tableEl);
        this.table_list.push(id);
        var newHR = this.createElement('hr', {
            'id': id + '_hr2'
        });
        tables.appendChild(newHR);

        var tableEl = this.createElement('table', {
            'name': id + '_tally',
            'id': id + '_tally',
            'border': 0,
            'cellspacing': 1,
            'cellpadding': 0
        });
        item_list_MSI[id + '_tally'] = tableEl;

        tables.appendChild(tableEl);
        this.addTableTally(id);
        this.addTableHeader(id);
        this.setTableSettingsValue(id, bundle_stage, bundle_name, bundle_shipping);
        this.count++;
        return id;

    };

    this.table_exists = function(id) {
        for (i = 0; i < this.table_list.length; i++) {
            if (this.table_list[i] == id) {
                return true;
            }
        }
        return false;
    };

    this.setTableSettingsValue = function(id, stage_val, name_val, shipping_val) {
        var select = document.getElementById('bundle_stage_' + id);
        for (var m = 0; m < select.options.length; m++) {
            if (select.options[m].value == stage_val) {
                select.options[m].selected = true;
            }
        }
        var name = document.getElementById('bundle_name_' + id);
        name.value = name_val;
        var shipping = document.getElementById('shipping_' + id);
        shipping.value = formatNumber(shipping_val, num_grp_sep, dec_sep, precision, precision);
    };

    this.getTableSettings = function(id) {
        var temp_html = document.getElementById('ie_hack_stage').innerHTML;
        temp_html = temp_html.replace('select_id', 'bundle_stage_' + id);
        temp_html = temp_html.replace('select_name', 'bundle_stage[' + id + ']');
        temp_html = temp_html.replace('name_id', 'bundle_name_' + id);
        temp_html = temp_html.replace('name_name', 'bundle_name[' + id + ']');
        temp_html = temp_html.replace('table_id', 'bundle_header_' + id);
        temp_html = temp_html.replace('table_name', 'bundle_header[' + id + ']');
        return temp_html;


    };

    this.addTableTally = function(id) {

        var tableEl = document.getElementById(id + '_tally');
        var rowEl = tableEl.insertRow(tableEl.rows.length);
        var tdEl = this.blankDataLabel.cloneNode(false);
        tdEl.width = '550';
        rowEl.appendChild(tdEl);
        var inputEl = this.createElement('input', {
            'type': 'button',
            'name': this.addRowName,
            'value': this.addRowValue
        }, ['button']);
        inputEl.tableId = id;
        inputEl.onclick = function() {
            quotesManager.addRow('', '', '', '', 0, 0, '', '', '', '', '', '', '', this.tableId, '', '', '', '', '', '0', '', '', '');
        };
        tdEl.appendChild(inputEl);

        var inputEl = this.createElement('input', {
            'type': 'button',
            'name': this.addCommentName,
            'value': this.addCommentValue
        }, ['button']);
        inputEl.tableId = id;
        inputEl.onclick = function() {
            quotesManager.addCommentRow('', this.tableId, '');
        };
        tdEl.appendChild(inputEl);

        var tdEl = this.blankDataLabel.cloneNode(false);
        tdEl.appendChild(document.createTextNode(this.subtotal_string));
        rowEl.appendChild(tdEl);
        var tdEl = this.blankDataLabel.cloneNode(false);
        tdEl.width = 70;
        rowEl.appendChild(tdEl);
        var inputEl = this.createElement('input', {
            'type': 'text',
            'size': 15,
            'name': 'subtotal[' + id + ']',
            'id': 'subtotal_' + id
        });
        inputEl.readOnly = true;
        inputEl.style.textAlign = 'right';
        this.setToReadOnly(inputEl);
        tdEl.appendChild(inputEl);
        item_list_MSI['subtotal_' + id] = inputEl;
        rowEl.appendChild(tdEl);

        var inputEl = this.createElement('input', {
            'type': 'hidden',
            'size': 15,
            'name': 'subtotal_usdollar[' + id + ']',
            'id': 'subtotal_usdollar' + id
        });
        inputEl.readOnly = true;
        tdEl.appendChild(inputEl);
        inputEl.style.textAlign = 'right';
        item_list_MSI['subtotal_usdollar' + id] = inputEl;
        rowEl.appendChild(tdEl);
        var tdEl = this.blankDataLabel.cloneNode(false);
        rowEl.appendChild(tdEl);

        var rowEl = tableEl.insertRow(tableEl.rows.length);
        var tdEl = this.blankDataLabel.cloneNode(false);
        tdEl.width = 550;
        rowEl.appendChild(tdEl);
        var tdEl = this.blankDataLabel.cloneNode(false);
        tdEl.appendChild(document.createTextNode(this.deal_tot_string));
        rowEl.appendChild(tdEl);
        var tdEl = this.blankDataLabel.cloneNode(false);
        tdEl.width = 70;
        rowEl.appendChild(tdEl);

        var inputEl = this.createElement('input', {
            'type': 'text',
            'size': 15,
            'name': 'deal_tot[' + id + ']',
            'id': 'deal_tot_' + id
        });
        inputEl.onchange = function() {
            if (quotesManager.isAmount(toDecimal(unformatNumber(this.value, num_grp_sep, dec_sep), precision))) {
                quotesManager.calculate(document);
            } else {
                alert(quotesManager.invalidAmount);
                this.select();
            }
        };
        inputEl.readOnly = true;
        inputEl.style.textAlign = 'right';
        this.setToReadOnly(inputEl);
        item_list_MSI['deal_tot_' + id] = inputEl;
        tdEl.appendChild(inputEl);
        rowEl.appendChild(tdEl);

        var tdEl = this.blankDataLabel.cloneNode(false);
        rowEl.appendChild(tdEl);

        //Discounted Subtotal
        var rowEl = tableEl.insertRow(tableEl.rows.length);
        var tdEl = this.blankDataLabel.cloneNode(false);
        tdEl.width = 550;
        rowEl.appendChild(tdEl);
        var tdEl = this.blankDataLabel.cloneNode(false);
        tdEl.appendChild(document.createTextNode(this.new_sub_string));
        rowEl.appendChild(tdEl);
        var tdEl = this.blankDataLabel.cloneNode(false);
        tdEl.width = 70;
        rowEl.appendChild(tdEl);
        var inputEl = this.createElement('input', {
            'type': 'text',
            'size': 15,
            'name': 'new_sub[' + id + ']',
            'id': 'new_sub_' + id
        });
        inputEl.onchange = function() {
            if (quotesManager.isAmount(toDecimal(unformatNumber(this.value, num_grp_sep, dec_sep), quotesManager.precision))) {
                quotesManager.calculate(document);
            } else {
                alert(quotesManager.invalidAmount);
                this.select();
            }
        };
        inputEl.readOnly = true;
        inputEl.style.textAlign = 'right';
        this.setToReadOnly(inputEl);
        item_list_MSI['new_sub_' + id] = inputEl;
        tdEl.appendChild(inputEl);
        rowEl.appendChild(tdEl);

        var tdEl = this.blankDataLabel.cloneNode(false);
        rowEl.appendChild(tdEl);

        var rowEl = tableEl.insertRow(tableEl.rows.length);
        var tdEl = this.blankDataLabel.cloneNode(false);
        tdEl.width = 550;
        rowEl.appendChild(tdEl);
        var tdEl = this.blankDataLabel.cloneNode(false);
        tdEl.appendChild(document.createTextNode(this.tax_string));
        rowEl.appendChild(tdEl);
        var tdEl = this.blankDataLabel.cloneNode(false);
        tdEl.width = 70;
        rowEl.appendChild(tdEl);

        var inputEl = this.createElement('input', {
            'type': 'text',
            'name': 'tax[' + id + ']',
            'id': 'tax_' + id,
            'size': 15
        });
        inputEl.readOnly = true;
        inputEl.style.textAlign = 'right';
        this.setToReadOnly(inputEl);
        tdEl.appendChild(inputEl);
        item_list_MSI['tax_' + id] = inputEl;
        rowEl.appendChild(tdEl);

        var inputEl = this.createElement('input', {
            'type': 'hidden',
            'name': 'tax_usdollar[' + id + ']',
            'id': 'tax_usdollar_' + id
        });
        inputEl.readOnly = true;
        inputEl.style.textAlign = 'right';
        tdEl.appendChild(inputEl);
        rowEl.appendChild(tdEl);
        var tdEl = this.blankDataLabel.cloneNode(false);
        rowEl.appendChild(tdEl);

        var rowEl = tableEl.insertRow(tableEl.rows.length);
        var tdEl = this.blankDataLabel.cloneNode(false);
        tdEl.width = 550;
        rowEl.appendChild(tdEl);
        var tdEl = this.blankDataLabel.cloneNode(false);
        tdEl.appendChild(document.createTextNode(this.shipping_string));
        rowEl.appendChild(tdEl);
        var tdEl = this.blankDataLabel.cloneNode(false);
        tdEl.width = 70;
        rowEl.appendChild(tdEl);

        var inputEl = this.createElement('input', {
            'type': 'text',
            'name': 'shipping[' + id + ']',
            'id': 'shipping_' + id,
            'size': 15
        });
        inputEl.onchange = function() {
            if (quotesManager.isAmount(toDecimal(unformatNumber(this.value, num_grp_sep, dec_sep), quotesManager.precision))) {
                quotesManager.calculate(document);
            } else {
                alert(quotesManager.invalidAmount);
                this.select();
            }
        };
        inputEl.readOnly = false;
        inputEl.style.textAlign = 'right';
        item_list_MSI['shipping_' + id] = inputEl;
        tdEl.appendChild(inputEl);
        rowEl.appendChild(tdEl);

        var inputEl = this.createElement('input', {
            'type': 'hidden',
            'name': 'shipping_usdollar[' + id + ']',
            'id': 'shipping_usdollar_' + id
        });
        inputEl.readOnly = true;
        inputEl.style.textAlign = 'right';
        tdEl.appendChild(inputEl);
        rowEl.appendChild(tdEl);
        var tdEl = this.blankDataLabel.cloneNode(false);
        rowEl.appendChild(tdEl);

        var rowEl = tableEl.insertRow(tableEl.rows.length);
        var tdEl = this.blankDataLabel.cloneNode(false);
        tdEl.width = 550;
        rowEl.appendChild(tdEl);
        var inputEl = this.createElement('input', {
            'type': 'button',
            'name': this.deleteTableName,
            'value': this.deleteTableValue
        }, ['button']);
        inputEl.tableId = id;
        inputEl.onclick = function() {
            if (confirm(quotesManager.deleteGroupConfirm)) {
                quotesManager.deleteTable(this.tableId);
            }
        };

        tdEl.appendChild(inputEl);
        var tdEl = this.blankDataLabel.cloneNode(false);
        tdEl.appendChild(document.createTextNode(this.total_string));
        rowEl.appendChild(tdEl);
        var tdEl = this.blankDataLabel.cloneNode(false);
        tdEl.width = 70;
        var inputEl = this.createElement('input', {
            'type': 'text',
            'name': 'total[' + id + ']',
            'id': 'total_' + id,
            'size': 15
        });
        inputEl.readOnly = true;
        inputEl.style.textAlign = 'right';
        this.setToReadOnly(inputEl);
        tdEl.appendChild(inputEl);
        item_list_MSI['total_' + id] = inputEl;
        rowEl.appendChild(tdEl);

        var tdEl = this.blankDataLabel.cloneNode(false);
        tdEl.width = 70;
        var inputEl = this.createElement('input', {
            'type': 'hidden',
            'name': 'total_usdollar[' + id + ']',
            'id': 'total_usdollar_' + id
        });
        inputEl.style.textAlign = 'right';
        inputEl.readOnly = true;
        tdEl.appendChild(inputEl);
        rowEl.appendChild(tdEl);
        var tdEl = this.blankDataLabel.cloneNode(false);
        rowEl.appendChild(tdEl);
    };


    this.addTableHeader = function(id) {
        var tableEl = document.getElementById(id);
        var rowEl = tableEl.insertRow(tableEl.rows.length);
        var tdEl = this.blankDataLabel.cloneNode(false);
        tdEl.width = 1;
        tdEl.appendChild(document.createTextNode(''));
        rowEl.appendChild(tdEl);
        var tdEl = this.blankDataLabel.cloneNode(false);
        tdEl.width = 55;
        tdEl.appendChild(document.createTextNode(this.list_quantity_string));
        rowEl.appendChild(tdEl);
        var tdEl = this.blankDataLabel.cloneNode(false);
        tdEl.width = 200;
        tdEl.appendChild(document.createTextNode(this.list_product_name_string));
        rowEl.appendChild(tdEl);
        var tdEl = this.blankDataLabel.cloneNode(false);
        tdEl.width = 55;
        tdEl.appendChild(document.createTextNode(''));
        rowEl.appendChild(tdEl);
        var tdEl = this.blankDataLabel.cloneNode(false);
        tdEl.width = 77;
        tdEl.appendChild(document.createTextNode(this.list_mf_part_num_string));
        rowEl.appendChild(tdEl);
        var tdEl = this.blankDataLabel.cloneNode(false);
        tdEl.width = 100;
        tdEl.appendChild(document.createTextNode(this.list_taxclass_string));
        rowEl.appendChild(tdEl);
        var tdEl = this.blankDataLabel.cloneNode(false);
        tdEl.width = 75;
        tdEl.appendChild(document.createTextNode(this.list_cost_string));
        rowEl.appendChild(tdEl);
        var tdEl = this.blankDataLabel.cloneNode(false);
        tdEl.width = 75;
        tdEl.appendChild(document.createTextNode(this.list_list_string));
        rowEl.appendChild(tdEl);
        var tdEl = this.blankDataLabel.cloneNode(false);
        tdEl.appendChild(document.createTextNode(this.list_discount_string));
        rowEl.appendChild(tdEl);
        var tdEl = this.blankDataLabel.cloneNode(false);
        tdEl.width = 90;
        tdEl.appendChild(document.createTextNode(this.list_deal_tot));
        rowEl.appendChild(tdEl);
    };


    this.addCommentRow = function(id, table_id, comment_description) {
        var form = document.getElementById('EditView');
        var table = document.getElementById(table_id);
        var row = table.insertRow(table.rows.length);
        var rowName = 'item_row_' + this.count;
        row.setAttribute('valign', 'top');
        row.id = rowName;
        row.tableId = table.id;
        row.count = this.count;

        var cell = row.insertCell(row.cells.length);
        cell.nowrap = 'nowrap';
        var buttonEl = this.createElement('input', {
            'type': 'button',
            'name': '||',
            'value': '||'
        }, ['button']);
        buttonEl.count = this.count;
        buttonEl.onclick = function() {
            quotesManager.grab_table_row('item_row_' + this.count);
        };
        cell.appendChild(buttonEl);

        var cell = row.insertCell(row.cells.length);
        cell.colSpan = '8';
        var textEl = this.createElement('input', {
            'type': 'hidden',
            'name': 'comment_id[' + this.count + ']',
            'id': 'comment_id_' + this.count,
            'value': id
        });
        form.appendChild(textEl);

        comment_description = comment_description.replace(/&#039;/g, '\'');
        var textEl = this.createElement('textarea', {
            'rows': 3,
            'cols': 120,
            'name': 'comment_description[' + this.count + ']',
            'value': comment_description.replace(/<br>/g, '\n')
        });
        textEl.count = this.count;
        cell.appendChild(textEl);

        var textEl = this.createElement('input', {
            'type': 'hidden',
            'name': 'comment_index[' + this.count + ']',
            'id': 'comment_index' + this.count,
            'value': this.count
        });
        cell.appendChild(textEl);

        var textEl = this.createElement('input', {
            'type': 'hidden',
            'name': 'comment_delete[' + this.count + ']',
            'id': 'comment_delete_' + this.count,
            'value': 1
        });
        form.appendChild(textEl);

        var textEl = this.createElement('input', {
            'type': 'hidden',
            'name': 'parent_group[' + this.count + ']',
            'id': 'parent_group_' + this.count,
            'value': table_id});
        form.appendChild(textEl);

        var textEl = this.createElement('input', {
            'type': 'hidden',
            'name': 'parent_group_index[' + this.count + ']',
            'id': 'parent_group_index' + this.count,
            'value': row.rowIndex});
        item_list_MSI['parent_group_index_' + this.count] = textEl;
        cell.appendChild(textEl);

        var textEl = this.createElement('input', {
            'type': 'hidden',
            'name': 'parent_group_position[' + this.count + ']',
            'id': 'parent_group_position' + this.count,
            'value': this.count});
        item_list_MSI['parent_group_position_' + this.count] = textEl;
        cell.appendChild(textEl);

        var cell = row.insertCell(row.cells.length);
        var buttonEl = this.createElement('input', {
            'type': 'button',
            'name': this.deleteCommentName,
            'id': 'delete_comment' + this.count,
            'value': this.deleteCommentValue}, ['button']);
        buttonEl.tableId = table_id;
        buttonEl.count = this.count;
        buttonEl.onclick = function() {
            if (confirm(quotesManager.deleteCommentConfirm)) {
                quotesManager.deleteCommentRow(row.count, row.tableId);
            }
        };
        cell.appendChild(buttonEl);
        rows_nb_per_group[table_id] = rows_nb_per_group[table_id] + 1;
        this.count++;
        $('#product_count')[0].value = this.count;
    };

    this.addRow = function(id, quantity, product_template_id, product_name, cost_price, list_price, discount_price, pricing_formula, pricing_formula_name, pricing_factor, tax_class, tax_class_name, mft_part_num, table_id, bundle_stage, bundle_name, bundle_shipping, product_description, type_id, discount_amount, discount_select, deal_calc, product_status) {

        if (!this.table_exists(table_id)) {
            table_id = this.addTable(table_id, bundle_stage, bundle_name, bundle_shipping);
        }

        the_quantity = (quantity == '') ? 1 : quantity;
        var unit_price;
        if (discount_price == '') unit_price = '0' + dec_sep + '00';
        else unit_price = discount_price;
        if (discount_select == '') discount_select = false;
        if (deal_calc == '') deal_calc = 0;
        if (product_status == '') product_status = this.default_product_status;
        var form = document.getElementById('EditView');
        var table = document.getElementById(table_id);
        var row = table.insertRow(table.rows.length);

        var rowName = 'item_row_' + this.count;
        table_array[table_id][rows_nb_per_group[table_id]] = parseFloat(this.count);
        rows_nb_per_group[table_id] = rows_nb_per_group[table_id] + 1;

        // add quicksearch stuff to the array
        var sqs_id = form.id + '_product_name[' + this.count + ']';
        sqs_objects[sqs_id] = {
            'id': sqs_id,
            'form': form.id,
            'method': 'query',
            'modules': ['ProductTemplates'],
            'group': 'or',
            'field_list': ['name', 'id', 'type_id', 'mft_part_num', 'cost_price', 'list_price',
                'discount_price', 'tax_class', 'pricing_factor', 'description',
                'cost_usdollar', 'list_usdollar', 'discount_usdollar', 'tax_class_name'],
            'populate_list': ['name_' + this.count, 'product_template_id_' + this.count],
            'conditions': [
                {
                    'name': 'name',
                    'op': 'like_custom',
                    'end': '%',
                    'value': ''
                }
            ],
            'order': 'name',
            'limit': '30',
            'no_match_text': sqs_no_match_text,
            'post_onblur_function': 'set_after_sqs'
        };

        row.setAttribute('valign', 'top');

        row.id = rowName;
        row.tableId = table.id;
        row.count = this.count;
        var cell = row.insertCell(row.cells.length);
        cell.nowrap = 'nowrap';
        var buttonEl = this.createElement('input', {
            'type': 'button',
            'name': '||',
            'value': '||'}, ['button']);
        buttonEl.count = this.count;
        buttonEl.onclick = function() {
            quotesManager.grab_table_row('item_row_' + this.count);
        };
        cell.appendChild(buttonEl);

        var cell = row.insertCell(row.cells.length);
        cell.nowrap = 'nowrap';
        var textEl = this.createElement('input', {
            'type': 'hidden',
            'name': 'product_id[' + this.count + ']',
            'id': 'product_id_' + this.count,
            'value': id
        });
        item_list_MSI['product_id_[' + this.count + ']'] = textEl;
        form.appendChild(textEl);

        var textEl = this.createElement('input', {
            'type': 'hidden',
            'name': 'delete[' + this.count + ']',
            'id': 'delete_' + this.count,
            'value': 1
        });
        item_list_MSI['delete[' + this.count + ']'] = textEl;
        form.appendChild(textEl);

        var textEl = this.createElement('input', {
            'type': 'hidden',
            'name': 'type_id[' + this.count + ']',
            'id': 'type_id_' + this.count,
            'value': type_id
        });
        item_list_MSI['type_id[' + this.count + ']'] = textEl;
        form.appendChild(textEl);

        var textEl = this.createElement('input', {
            'type': 'hidden',
            'name': 'product_template_id[' + this.count + ']',
            'id': 'product_template_id_' + this.count,
            'value': product_template_id
        });
        item_list_MSI['product_template_id[' + this.count + ']'] = textEl;
        form.appendChild(textEl);

        var textEl = this.createElement('input', {
            'type': 'hidden',
            'name': 'status[' + this.count + ']',
            'id': 'status[' + this.count + ']',
            'value': product_status
        });
        item_list_MSI['status[' + this.count + ']'] = textEl;
        form.appendChild(textEl);


        var textEl = this.createElement('input', {
            'type': 'hidden',
            'name': 'tax_class[' + this.count + ']',
            'id': 'tax_class_' + this.count,
            'value': tax_class
        });
        item_list_MSI['tax_class[' + this.count + ']'] = textEl;
        cell.appendChild(textEl);

        var textEl = this.createElement('input', {
            'type': 'hidden',
            'name': 'parent_group[' + this.count + ']',
            'id': 'parent_group_' + this.count,
            'value': table_id
        });
        item_list_MSI['parent_group_' + this.count] = textEl;
        cell.appendChild(textEl);

        var textEl = this.createElement('input', {
            'type': 'hidden',
            'name': 'parent_group_index[' + this.count + ']',
            'id': 'parent_group_index' + this.count,
            'value': row.rowIndex
        });
        item_list_MSI['parent_group_index_' + this.count] = textEl;
        cell.appendChild(textEl);

        var textEl = this.createElement('input', {
            'type': 'hidden',
            'name': 'parent_group_position[' + this.count + ']',
            'id': 'parent_group_position' + this.count,
            'value': this.count
        });
        item_list_MSI['parent_group_position_' + this.count] = textEl;
        cell.appendChild(textEl);

        //quantity
        cell.width = 55;
        var textEl = this.createElement('input', {
            'type': 'text',
            'size': 4,
            'name': 'quantity[' + this.count + ']',
            'id': 'quantity_' + this.count,
            'value': the_quantity
        });
        var quantName = 'quantity_' + this.count;
        item_list_MSI['quantity[' + this.count + ']'] = textEl;
        $(textEl).on('change', function() {
            if (isFloat(quotesManager.lookup_item(quantName, document).value)) {
                quotesManager.calculate(document);
            } else {
                alert(quotesManager.invalidAmount);
                alert(quotesManager.lookup_item(quantName, document).value);
                quotesManager.lookup_item(quantName, document).select();
            }
        });
        cell.appendChild(textEl);

        //product name
        var cell1 = row.insertCell(row.cells.length);
        cell1.width = 200;
        cell1.noWrap = true;
        var itemName = 'name_' + this.count;
        var textEl = this.createElement('input', {
            'type': 'text',
            'size': 30,
            'name': 'product_name[' + this.count + ']',
            'id': itemName,
            'value': product_name
        }, ['sqsEnabled', 'sqsNoAutofill']);
        textEl.count = this.count;
        textEl.alt = function() {
            quotesManager.lookup_item(itemName, document);
        };
        textEl.onchange = function() {
            quotesManager.toEdit(document, this.count);
        };
        item_list_MSI[itemName] = textEl;
        cell1.appendChild(textEl);

        cell1.appendChild(this.createElement('div', {}, []));

        var itemName = 'description_' + this.count;
        product_description = product_description.replace(/&#039;/g, '\'');
        var textEl = this.createElement('textarea', {
            'rows': 3,
            'cols': 30,
            'name': 'product_description[' + this.count + ']',
            'id': itemName,
            'value': product_description.replace(/<br>/g, '\n')
        });
        textEl.count = this.count;
        textEl.alt = function() {
            quotesManager.lookup_item(itemName, document);
        };
        item_list_MSI[itemName] = textEl;
        cell1.appendChild(textEl);

        var cellb = row.insertCell(row.cells.length);
        cellb.width = 55;
        cellb.noWrap = true;
        var spanEl = this.createElement('span', {}, ['id-ff']);
        cellb.appendChild(spanEl);

        var itemName = 'product_name_select_' + this.count;
        var buttonEl = this.createElement('button', {
            'type': 'button',
            'title': this.selectButtonTitle,
            'name': 'btn_product_name[' + this.count + ']',
            'id': itemName,
            'value': this.selectButtonValue
        }, ['button']);
        $(buttonEl).html('<img src="index.php?entryPoint=getImage&imageName=id-ff-select.png&themeName=' + SUGAR.themes.theme_name + '">');
        buttonEl.textElement = 'name_' + this.count;
        buttonEl.count = this.count;
        buttonEl.onclick = function() {
            quotesManager.openPopup(quotesManager.lookup_item(this.textElement, document).value, this.count);
            return false;
        };
        spanEl.appendChild(buttonEl);

        //mft_part
        var cell2 = row.insertCell(row.cells.length);
        cell2.width = 75;
        var itemName = 'mft_part_num_' + this.count;
        var textEl = this.createElement('input', {
            'type': 'text',
            'size': 10,
            'name': 'mft_part_num[' + this.count + ']',
            'id': itemName,
            'value': mft_part_num
        });
        item_list_MSI[itemName] = textEl;
        cell2.appendChild(textEl);

        var itemName = 'pricing_factor_' + this.count;
        var textEl = this.createElement('input', {
            'type': 'hidden',
            'size': 4,
            'name': 'pricing_factor[' + this.count + ']',
            'id': itemName,
            'value': pricing_factor
        });
        item_list_MSI[itemName] = textEl;
        cell2.appendChild(textEl);

        var divselect = this.createElement('div', {
            'id': 'taxselect' + this.count
        });
        $(divselect).hide();
        item_list_MSI['taxselect' + this.count] = divselect;
        var cell3 = row.insertCell(row.cells.length);
        cell3.width = 100;
        var itemName = 'tax_class_select_name_' + this.count;
        var selectEl = this.createElement('select', {
            'name': 'tax_class_select_name[' + this.count + ']',
            'id': itemName
        });
        selectEl.count = this.count;
        selectEl.onchange = function() {
            quotesManager.taxSelectChanged(document, this.count);
        };
        for (i = 0; i < this.tax_rate_keys.length; i++) {
            var optionEl = this.createElement('option', {});
            optionEl.text = this.tax_rate_keys[i];
            optionEl.value = this.tax_rates[optionEl.text];
            try {
                selectEl.appendChild(optionEl, null);
            } catch (exception) {
                selectEl.appendChild(optionEl);
            }
        }

        divselect.appendChild(selectEl);
        cell3.appendChild(divselect);
        item_list_MSI[itemName] = selectEl;

        var divnoselect = this.createElement('div', {
            'id': 'taxinput' + this.count
        });
        $(divnoselect).hide();
        //        divnoselect.style.display = 'none';>
        item_list_MSI['taxinput' + this.count] = divselect;

        var itemName = 'tax_class_name_' + this.count;
        var textEl = this.createElement('input', {
            'type': 'text',
            'size': 8,
            'name': 'tax_class_name[' + this.count + ']',
            'id': itemName,
            'value': tax_class_name
        });
        item_list_MSI[itemName] = textEl;
        divnoselect.appendChild(textEl);
        cell3.appendChild(divnoselect);

        var cell4 = row.insertCell(row.cells.length);
        cell4.width = 75;
        var itemName = 'cost_price_' + this.count;
        var textEl = this.createElement('input', {
            'type': 'text',
            'size': 8,
            'name': 'cost_price[' + this.count + ']',
            'id': itemName,
            'value': cost_price
        });
        textEl.style.textAlign = 'right';
        textEl.onchange = function() {
            if (!quotesManager.isAmount(toDecimal(unformatNumber(this.value, num_grp_sep, dec_sep), quotesManager.precision))) {
                alert(quotesManager.invalidAmount);
                this.select();
            }
        };
        item_list_MSI[itemName] = textEl;
        cell4.appendChild(textEl);

        var cell5 = row.insertCell(row.cells.length);
        cell5.width = 75;
        var itemName = 'list_price_' + this.count;
        var textEl = this.createElement('input', {
            'type': 'text',
            'size': 8,
            'name': 'list_price[' + this.count + ']',
            'id': itemName,
            'value': list_price
        });
        textEl.style.textAlign = 'right';
        textEl.onchange = function() {
            if (!quotesManager.isAmount(toDecimal(unformatNumber(this.value, num_grp_sep, dec_sep), quotesManager.precision))) {
                alert(quotesManager.invalidAmount);
                this.select();
            }
        };
        item_list_MSI[itemName] = textEl;
        cell5.appendChild(textEl);

        var cell6 = row.insertCell(row.cells.length);
        cell6.width = 80;
        var itemName = 'discount_price_' + this.count;
        var textEl = this.createElement('input', {
            'type': 'text',
            'size': 8,
            'name': 'discount_price[' + this.count + ']',
            'id': itemName,
            'value': unit_price
        });
        textEl.style.textAlign = 'right';
        textEl.onchange = function() {
            if (quotesManager.isAmount(toDecimal(unformatNumber(this.value, num_grp_sep, dec_sep), quotesManager.precision))) {
                quotesManager.calculate(document);
            } else {
                alert(quotesManager.invalidAmount);
                this.select();
            }
        };
        item_list_MSI[itemName] = textEl;
        cell6.appendChild(textEl);

        var cell7 = row.insertCell(row.cells.length);
        cell7.width = 60;
        var divselect = this.createElement('div', {
            'id': 'discount_amount_div' + this.count
        });
        item_list_MSI['discount_amount_div' + this.count] = divselect;
        cell7.appendChild(divselect);

        var itemName = 'discount_amount_' + this.count;
        var textEl = this.createElement('input', {
            'type': 'text',
            'size': 4,
            'name': 'discount_amount[' + this.count + ']',
            'id': itemName,
            'value': discount_amount
        });
        textEl.style.textAlign = 'right';
        textEl.count = this.count;
        textEl.onchange = function() {
            if (quotesManager.isAmount(toDecimal(unformatNumber(this.value, num_grp_sep, dec_sep), quotesManager.precision))) {
                quotesManager.discount_calculated(document, this.count);
            } else {
                alert(quotesManager.invalidAmount);
                this.select();
            }
        };
        item_list_MSI[itemName] = textEl;
        divselect.appendChild(textEl);

        /*	var divselect = document.createElement('div');
         divselect.setAttribute('width', '100');
         divselect.setAttribute('id', 'discount_amount_select' + count);
         item_list_MSI['discount_amount_select' + count] = divselect;*/
        var cell8 = row.insertCell(row.cells.length);
        cell8.width = 20;

        var newtext = document.createTextNode('in\u00A0%');
        cell8.appendChild(newtext);

        var cell9 = row.insertCell(row.cells.length);
        cell9.width = 50;
        var ele2 = this.createElement('td', {});
        var itemName = 'checkbox_select_' + this.count;
        var textEl = this.createElement('input', {
            'type': 'checkbox',
            'name': 'checkbox_select[' + this.count + ']',
            'id': itemName,
            'value': '1'
        }, ['checkbox']);
        textEl.count = this.count;
        textEl.onclick = function() {
            quotesManager.discount_calculated(document, this.count);
        };

        cell9.appendChild(ele2);
        ele2.appendChild(textEl);

        // it has to happen after ele2.appendChild(textEl) otherwise the checkox won't be checked in IE7
        if (discount_select == true) {
            textEl.setAttribute('checked', true);
        }
        item_list_MSI[itemName] = textEl;

        var divnoselect = this.createElement('div', {
            'id': 'deal_calc' + this.count
        });
        $(divnoselect).hide();
        item_list_MSI['deal_calc' + this.count] = divselect;

        var itemName = 'discount_select_' + this.count;
        var inputselect = this.createElement('input', {
            'type': 'hidden',
            'name': 'discount_select[' + this.count + ']',
            'id': itemName,
            'value': discount_select
        });

        divnoselect.appendChild(inputselect);
        item_list_MSI[itemName] = inputselect;

        var itemName = 'deal_calc_' + this.count;
        var textEl = this.createElement('input', {
            'type': 'text',
            'size': 8,
            'name': 'deal_calc[' + this.count + ']',
            'id': itemName,
            'value': deal_calc
        });
        item_list_MSI[itemName] = textEl;
        divnoselect.appendChild(textEl);
        cell9.appendChild(divnoselect);

        var cell10 = row.insertCell(row.cells.length);
        var buttonEl = this.createElement('input', {
            'type': 'button',
            'name': this.deleteButtonName,
            'id': 'delete_row' + this.count,
            'value': this.deleteButtonValue
        }, ['button']);
        buttonEl.tableId = table_id;
        buttonEl.count = this.count;
        buttonEl.onclick = function() {
            if (confirm(quotesManager.deleteButtonConfirm)) {
                quotesManager.deleteRow(this.count, this.tableId);
                quotesManager.calculate(document);
            }
        };
        cell10.appendChild(buttonEl);

        this.toEdit(document, this.count);
        this.toReadOnly(document, this.count);
        registerSingleSmartInputListener(document.getElementById('name_' + this.count));

        this.count++;
        document.getElementById('product_count').value = this.count;
        //do the initial this.calculate to run when page loads.
        this.calculate(document);
    };

    this.hasAttribute = function(element, attr) {
        if (element.hasAttribute) return element.hasAttribute(attr);
        return (typeof(element.getAttribute(attr)) == typeof(''));
    };

    this.deleteRow = function(id, table_id) {
        for (var i in table_array[table_id]) {
            if (table_array[table_id][i] == id) {
                table_array[table_id].splice(i, 1);
            }
        }
        this.ungrab_table_row();
        var table = document.getElementById(table_id);
        var rows = table.rows;
        var looking_for = 'delete_row' + id;
        for (i = 1; i < rows.length; i++) {
            cells = rows[i].cells;
            for (var j = 9; j < rows[i].cells.length; j++) {
                cell = rows[i].cells[j];
                children = cell.childNodes;
                for (var k = 0; k < children.length; k++) {
                    var child = children[k];
                    if (child.nodeType == 1 && this.hasAttribute(child, 'id')) {
                        if (child.getAttribute('id') == looking_for) {
                            table.deleteRow(i);
                            document.getElementById('delete_' + id).value = document.getElementById('product_id_' + id).value;
                            return;
                        }
                    }
                }
            }
        }
    };
    this.deleteCommentRow = function(id, table_id) {
        this.ungrab_table_row();
        var table = document.getElementById(table_id);
        var rows = table.rows;
        var looking_for = 'item_row_' + id;
        for (var i = 0; i < rows.length; i++) {
            if (rows[i].id == looking_for) {
                table.deleteRow(i);
                document.getElementById('comment_delete_' + id).value = document.getElementById('comment_id_' + id).value;
                return;
            }
        }
    };
    this.toggleDisplay = function(id) {

        if (this.document.getElementById(id).style.display == 'none') {
            this.document.getElementById(id).style.display = 'inline'
            if (this.document.getElementById(id + 'link') != undefined) {
                this.document.getElementById(id + 'link').style.display = 'none';
            }

        } else {
            this.document.getElementById(id).style.display = 'none'
            if (this.document.getElementById(id + 'link') != undefined) {
                this.document.getElementById(id + 'link').style.display = 'inline';
            }
        }
    };
    this.calculate = function(doc) {
        var gt = Array();
        warned = false;
        gt['tax'] = 0;
        gt['subtotal'] = 0;
        gt['total'] = 0;
        gt['shipping'] = 0;
        gt['discount'] = 0;
        gt['new_sub'] = 0;
        for (var table_count = 0; table_count < this.table_list.length; table_count++) {
            cur_table_id = this.table_list[table_count];
            var table = doc.getElementById(cur_table_id);
            if (table != null && typeof(table) != 'undefined') {
                var bundle_stage = doc.getElementById('bundle_stage_' + cur_table_id).value;
                // Bug 54931. Calculate for custom groups too.
                var retval = this.calculate_table(doc, cur_table_id);
                gt['tax'] += retval['tax'];
                gt['subtotal'] += retval['subtotal'];
                gt['discount'] += retval['discount'];
                gt['total'] += retval['total'];
                gt['new_sub'] += retval['new_sub'];
                if (retval['shipping'] != '') gt['shipping'] += parseFloat(retval['shipping']);
            }
        }

        this.lookup_item('grand_total', document).innerHTML = formatNumber(toDecimal(gt['total'], precision), num_grp_sep, dec_sep, precision, precision);
        this.lookup_item('grand_ship', document).innerHTML = formatNumber(toDecimal(gt['shipping'], precision), num_grp_sep, dec_sep, precision, precision);
        this.lookup_item('grand_tax', document).innerHTML = formatNumber(toDecimal(gt['tax'], precision), num_grp_sep, dec_sep, precision, precision);
        this.lookup_item('grand_new_sub', document).innerHTML = formatNumber(toDecimal(gt['new_sub'], precision), num_grp_sep, dec_sep, precision, precision);
        this.lookup_item('grand_discount', document).innerHTML = formatNumber(toDecimal(gt['discount'], precision), num_grp_sep, dec_sep, precision, precision);
        this.lookup_item('grand_sub', document).innerHTML = formatNumber(toDecimal(gt['subtotal'], precision), num_grp_sep, dec_sep, precision, precision);

    };
    this.calculate_table = function(doc, table_id) {
        var retval = Array();
        retval['subtotal'] = this.calculate_subtotal(doc, table_id);
        retval['discount'] = this.calculate_discount(doc, table_id);
        retval['new_sub'] = this.calculate_new_sub(doc, table_id);
        retval['tax'] = this.calculate_tax(doc, table_id);
        retval['total'] = this.calculate_total(doc, table_id);
        retval['shipping'] = unformatNumber(this.lookup_item('shipping_' + table_id).value, num_grp_sep, dec_sep);
        return retval;
    };

    /*
     formula is discount_price * quantity * 1.0;
     */
    this.walk_the_kids = function(doc, children, variables, variable_values) {
        for (k = 0; k < children.length; k++) {
            child = children[k];
            if (child.nodeType == 1 &&
                this.hasAttribute(child, 'id') &&
                child.getAttribute('id') != child.getAttribute('name') &&
                child.tagName != 'LI' &&
                (child.tagName != 'DIV' || child.style.display != 'NONE')) {

                var id = child.getAttribute('id');

                for (n = 0; n < variables.length; n++) {
                    var reg = new RegExp('^' + variables[n] + '[0-9]+$');
                    if (reg.test(id)) {
                        if (child.tagName == 'SELECT') {
                            var select = this.lookup_item(id, document);
                            variable_values[variables[n]] = select.options[select.selectedIndex].value;
                        } else {
                            variable_values[variables[n]] = this.lookup_item(id, document).value;
                        }
                    }

                    if (child.childNodes.length > 0 && child.tagName != 'OPTION' && child.tagName != 'TEXTAREA') {
                        variable_values = this.walk_the_kids(doc, child.childNodes, variables, variable_values);
                    }

                }
            }
        }
        return variable_values;
    };

    var warned = false;
    this.calculate_formula = function(doc, formula, table_id) {
        var total = 0.00;
        var formula_type = '';
        if (formula != 'discount_amount' && formula != 'tax') {
            var variables = formula.match(/(_var_[a-zA-Z\_]+)+/g);
            var variable_values = new Array();
            formula = formula.replace(/(_var_)/g, '');
            for (q = 0; q < variables.length; q++) {
                variables[q] = trim(variables[q]).replace(/(_var_)/g, '');
            }
        } else {
            formula_type = formula;
        }

        var table = doc.getElementById(table_id);
        var rows = table.rows;
        for (var i = 0; i < rows.length; i++) {
            if (formula_type == 'discount_amount') {
                formula = "unformatNumber('_var_discount_amount_', num_grp_sep, dec_sep) / 100 " +
                    "* unformatNumber('_var_discount_price_', num_grp_sep, dec_sep) * 1.0";
                if (i != 0) {

                    var chckd = null;
                    var ckId = 'checkbox_select_' + table_array[table_id][i];
                    //retrieve the value of percentage discount check box
                    if (
                        typeof(rows[i].cells[11]) != 'undefined' &&
                            typeof(rows[i].cells[11].childNodes[0]) != 'undefined' &&
                            typeof(rows[i].cells[11].childNodes[0].childNodes[0]) != 'undefined'
                        ) {//check box was found, retrieve value through dom tree. We try this way first as it is more
                        //reliable when rows have been removed than relying on count
                        chckd = rows[i].cells[11].childNodes[0].childNodes[0].checked;
                    } else {
                        //check box was not found, retrieve value directly
                        chckd = doc.getElementById(ckId) && doc.getElementById(ckId).checked;
                    }

                    if (chckd) {
                        formula = "(unformatNumber('_var_quantity_', num_grp_sep, dec_sep) " +
                            "* unformatNumber('_var_discount_price_', num_grp_sep, dec_sep)) " +
                            "* (unformatNumber('_var_discount_amount_', num_grp_sep, dec_sep) / 100)";
                    }
                    else {
                        formula = "unformatNumber('_var_discount_amount_', num_grp_sep, dec_sep)";
                    }
                }
                var variables = formula.match(/(_var_[a-zA-Z\_]+)+/g);
                var variable_values = new Array();
                formula = formula.replace(/(_var_)/g, '');
            }
            if (formula_type == 'tax') {
                var taxrate_value = 'taxrate_value';
                var taxrate = 0.00;
                if (doc.EditView.taxrate_id.options.selectedIndex > -1) {
                    taxrate = get_taxrate(doc.EditView.taxrate_id.options[doc.EditView.taxrate_id.options.selectedIndex].value);
                }
                var taxable = SUGAR.language.get('app_list_strings', 'tax_class_dom');
                taxable = taxable['Taxable'];
                var formula_discount = "unformatNumber('_var_discount_amount_', num_grp_sep, dec_sep) / 100 * unformatNumber('_var_discount_price_', num_grp_sep, dec_sep) * 1.0";
                if (i != 0) {
                    var chckd = null;
                    var ckId = 'checkbox_select_' + table_array[table_id][i];
                    //retrieve the value of percentage discount check box
                    if (
                        typeof(rows[i].cells[11]) != 'undefined' &&
                            typeof(rows[i].cells[11].childNodes[0]) != 'undefined' &&
                            typeof(rows[i].cells[11].childNodes[0].childNodes[0]) != 'undefined'
                        ) {//check box was found, retrieve value through dom tree. We try this way first as it is more
                        //reliable when rows have been removed than relying on count
                        chckd = rows[i].cells[11].childNodes[0].childNodes[0].checked;
                    } else {
                        //check box was not found, retrieve value directly
                        chckd = doc.getElementById(ckId) && doc.getElementById(ckId).checked;
                    }

                    if (chckd) {
                        formula_discount = "(unformatNumber('_var_quantity_', num_grp_sep, dec_sep) " +
                            "* unformatNumber('_var_discount_price_', num_grp_sep, dec_sep)) " +
                            "* (unformatNumber('_var_discount_amount_', num_grp_sep, dec_sep) / 100)";
                    }
                    else {
                        formula_discount = "unformatNumber('_var_discount_amount_', num_grp_sep, dec_sep) * 1.0";
                    }
                }
                formula = "(unformatNumber('_var_discount_price_', num_grp_sep, dec_sep) * unformatNumber('_var_quantity_', num_grp_sep, dec_sep) * 1.0 - " + formula_discount + ") * " + taxrate + " * 1.0 * (('_var_tax_class_' == " + "'" + taxable + "') || ('_var_tax_class_' == " + "'Taxable'))";
                var variables = formula.match(/(_var_[a-zA-Z\_]+)+/g);
                var variable_values = new Array();
                formula = formula.replace(/(_var_)/g, '');

            }
            for (q = 0; q < variables.length; q++) {
                variables[q] = trim(variables[q]).replace(/(_var_)/g, '');
            }
            cells = rows[i].cells;
            for (q = 0; q < variables.length; q++) {
                variable_values[variables[q]] = 0;
            }
            for (j = 0; j < cells.length; j++) {
                cell = rows[i].cells[j];
                children = cell.childNodes;
                if (typeof(cell.childNodes) == 'undefined' || cell.childNodes == null) {
                    continue;
                }
                variable_values = this.walk_the_kids(doc, children, variables, variable_values);
            }

            var newformula = formula;

            for (z = 0; z < variables.length; z++) {
                var reg = variables[z];
                newformula = newformula.replace(reg, variable_values[variables[z]]);
            }
            try {
                total = total + eval(newformula);
            } catch (exception) {
                if (!warned) {
                    alert(this.check_data);
                    warned = true;
                }
                return 0;
            }
        }

        return total;
    };
    this.calculate_subtotal = function(doc, table_id) {
        var subtotal = 0.00;
        subtotal = this.calculate_formula(doc, "unformatNumber('_var_discount_price_', num_grp_sep, dec_sep) * unformatNumber('_var_quantity_', num_grp_sep, dec_sep) * 1.0", table_id);
        this.lookup_item('subtotal_' + table_id, doc).value = formatNumber(toDecimal(subtotal, precision), num_grp_sep, dec_sep, precision, precision);
        return subtotal;
    };
    this.calculate_discount = function(doc, table_id) {
        var discount = 0.00;
        discount = this.calculate_formula(doc, 'discount_amount', table_id);
        this.lookup_item('deal_tot_' + table_id, doc).value = formatNumber(toDecimal(discount, precision), num_grp_sep, dec_sep, precision, precision);
        return discount;
    };
    this.calculate_new_sub = function(doc, table_id) {
        var new_sub = 0.00;
        new_sub = unformatNumber(this.lookup_item('subtotal_' + table_id, doc).value, num_grp_sep, dec_sep) - unformatNumber(this.lookup_item('deal_tot_' + table_id, doc).value, num_grp_sep, dec_sep);
        this.lookup_item('new_sub_' + table_id, doc).value = formatNumber(toDecimal(new_sub, precision), num_grp_sep, dec_sep, precision, precision);
        return new_sub;
    };
    this.calculate_tax = function(doc, table_id) {
        var tax = 0.00;
        tax = this.calculate_formula(doc, 'tax', table_id);
        this.lookup_item('tax_' + table_id, doc).value = formatNumber(toDecimal(tax, precision), num_grp_sep, dec_sep, precision, precision);
        return tax;
    };
    this.calculate_total = function(doc, table_id) {
        var total = 0.00;
        var discount_price;
        var quantity;
        var delete_me;

        total += unformatNumber(this.lookup_item('subtotal_' + table_id, doc).value, num_grp_sep, dec_sep) +
            unformatNumber(this.lookup_item('tax_' + table_id, doc).value, num_grp_sep, dec_sep) +
            unformatNumber(this.lookup_item('shipping_' + table_id, doc).value, num_grp_sep, dec_sep) -
            unformatNumber(this.lookup_item('deal_tot_' + table_id, doc).value, num_grp_sep, dec_sep);

        this.lookup_item('total_' + table_id, doc).value = formatNumber(toDecimal(total, precision), num_grp_sep, dec_sep, precision, precision);
        return total;
    };
    this.ConvertItems = function(id) {
        var items = new Array();
        for (y = 0; y < this.count; y++) {
            var discount_price = this.lookup_item('discount_price_' + y, document);
            var list_price = this.lookup_item('list_price_' + y, document);
            var cost_price = this.lookup_item('cost_price_' + y, document);
            var discount_amount = this.lookup_item('discount_amount_' + y, document);
            var discount_select = this.lookup_item('discount_select_' + y, document);

            if (discount_price != null && typeof(discount_price) != 'undefined') {
                discount_price.value = unformatNumber(discount_price.value, num_grp_sep, dec_sep);
                list_price.value = unformatNumber(list_price.value, num_grp_sep, dec_sep);
                cost_price.value = unformatNumber(cost_price.value, num_grp_sep, dec_sep);

                items[items.length] = list_price;
                items[items.length] = cost_price;
                items[items.length] = discount_price;

                if (discount_select.value == 'false') {
                    discount_amount.value = unformatNumber(discount_amount.value, num_grp_sep, dec_sep);
                    items[items.length] = discount_amount;
                }
            }
        }

        ConvertRate(id, items);

        for (y = 0; y < this.count; y++) {
            var discount_price = this.lookup_item('discount_price_' + y, document);
            var list_price = this.lookup_item('list_price_' + y, document);
            var cost_price = this.lookup_item('cost_price_' + y, document);
            var discount_amount = this.lookup_item('discount_amount_' + y, document);
            var discount_select = this.lookup_item('discount_select_' + y, document);

            if (discount_price != null && typeof(discount_price) != 'undefined') {
                discount_price.value = formatNumber(discount_price.value, num_grp_sep, dec_sep, precision, precision);
                list_price.value = formatNumber(list_price.value, num_grp_sep, dec_sep, precision, precision);
                cost_price.value = formatNumber(cost_price.value, num_grp_sep, dec_sep, precision, precision);

                if (discount_select.value == 'false') {
                    discount_amount.value = formatNumber(discount_amount.value, num_grp_sep, dec_sep, precision, precision);
                }
            }
        }

        this.calculate(document);
    };
    this.isAmount = function(amount) {

        if (amount < 0) {
            the_amount = amount * -1;
        }
        else {
            the_amount = amount;
        }
        return isFloat(the_amount);
    };
    this.isCustomGroupStage = function(value) {
        var quote_dom = SUGAR.language.get('app_list_strings', 'in_total_group_stages');
        for (var v in quote_dom) {
            if (value == v) {
                return false;
            }
        }
        return true;
    };
    this.createElement = function(tagName, validAttributes, classes) {
        var inputEl = $(document.createElement(tagName));
        for (var attr in validAttributes) {
            inputEl.attr(attr, validAttributes[attr]);
        }
        if (typeof classes != 'undefined') {
            for (var i = 0; i < classes.length; i++) {
                inputEl.addClass(classes[i]);
            }
        }
        return inputEl[0];
    };
}

