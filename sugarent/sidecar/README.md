# Sidecar

Sidecar requires [node.js][nodejs] to be installed.

**Make sure you have the `npm` package.**

Furthermore, some packages used require node.js to be version 0.12 or higher. If yours is out of date, then run:

```bash
$ brew update
$ brew upgrade node
```

Now install the dependencies by running:

```bash
$ npm install
```

You should also install [gjslint][gjslint] by running:

```bash
$ sudo easy_install pip
$ sudo pip install https://closure-linter.googlecode.com/svn/trunk/
```

and both [gulp][gulp] and [gulp-cli][gulp-cli] by running:

```bash
$ npm install -g gulp gulp-cli
```

## Building

You can build Sidecar by running `gulp`. This will minify all the JavaScript and output it in the minified
folder.

## Committing Changes

If you run the build script, you will change the minified files. Please do not commit these - leave that job to the
team leaders.

## Testing

Before submitting, please run the test suite:

```bash
$ gulp karma
```

If any tests fail, you need to fix them before submitting.

If you are having trouble getting tests to pass, you can run the suite in developer mode:

```bash
$ gulp karma --dev
```

You'll also have to click the "Debug" button and then open up your developer tools on the new tab that results.

If you are worried that your code might fail in certain browsers, you can run the test suite in them:

```bash
$ gulp karma --browsers Firefox,Chrome # PhantomJS is also an option
```

If you are developing a new module, please ensure your unit tests give decent code coverage for it.
To test:

```bash
$ gulp karma --coverage
```

HTML files will be dumped into a subdirectory of your OS's temporary folder by default.
This can be overridden with the `--path` option:

```bash
$ gulp karma --coverage --path <path>
```

## Linting

You should also run gjslint, jscs, and jshint:

```bash
$ gulp lint
```

Our code is not yet completely compliant with any of these tools yet.
Until all of our files are completely compliant, this is the recommended
procedure to ensure that your changes are as compliant as possible:

```bash
# make your changes
$ gulp lint # count the number of errors reported by both tools
$ git stash
$ gulp lint # verify that the numbers of errors are greater than the numbers from before
$ git stash pop
```

## Generating the documentation

```bash
$ gulp jsduck
```

[nodejs]: http://nodejs.org
[gjslint]: https://developers.google.com/closure/utilities/
[gulp]: https://github.com/gulpjs/gulp
[gulp-cli]: https://github.com/gulpjs/gulp-cli
