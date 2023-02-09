<p><img src="http://embepiercing.io/images/embepiercing100.svg" width="260" alt="embepiercing"></p>

[![GitHub release](https://img.shields.io/github/release/jeffreyvr/embepiercing?include_prereleases=&sort=semver)](https://github.com/jeffreyvr/embepiercing/releases/)
[![License](https://img.shields.io/badge/License-MIT-blue)](#license)
[![issues - embepiercing](https://img.shields.io/github/issues/jeffreyvr/embepiercing)](https://github.com/jeffreyvr/embepiercing/issues)

# Introduction

embepiercing is a minimal boilerplate theme for WordPress using [Tailwind CSS](https://tailwindcss.com/).

## Getting started

### Using the installer

You can get started using the installer (using composer):

```bash
composer global require jeffreyvanrossum/embepiercing-installer

embepiercing new example-theme
```

_If you haven't already, make sure to place the `~/.composer/vendor/bin` directory in your `PATH` so the embepiercing executable is found when you run the embepiercing command in your terminal._

You can optionally set the theme name.

```bash
embepiercing new example-theme --name="Example Theme"
```

By default, embepiercing uses esbuild and Tailwind's CLI for compiling. Rather use Laravel Mix?

```bash
embepiercing new example-theme --compiler="mix"
```

You can also initialize a new Git repository (branch defaults to `main`):

```bash
embepiercing new example-theme --name="Example Theme" --git --branch="main"
```

Once your theme is ready, don't forget to cd into the directory.

You will be asked if you would like to have WordPress installed as well. Keep in mind that you still need a local development environment for PHP and MySQL.

### Regular method

- Clone repo `git clone https://github.com/jeffreyvr/embepiercing.git && cd embepiercing`
- Run `rm -rf .git` to remove git (or `rmdir .git` for Windows)
- Run `npm install`
- Run `npm run watch` to start developing

### General

embepiercing uses the [Tailwind CLI](https://tailwindcss.com/docs/installation#using-tailwind-cli), [PostCSS](https://postcss.org) and [esbuild](https://esbuild.github.io).

You will find the editable CSS and Javascript files within the `/resources` folder.

Before you use your theme in production, make sure you run `npm run production`.

## NPM Scripts

There are several NPM scripts available. You'll find the full list in the `package.json` file under "scripts". A script is executed through the terminal by running `npm run script-name`.

| Script     | Description                                                                    |
| ---------- | ------------------------------------------------------------------------------ |
| production | Creates a production (minified) build of app.js, app.css and editor-style.css. |
| dev        | Creates a development build of app.js, app.css and editor-style.css.           |
| watch      | Runs several watch scripts concurrently.                                       |
| watch-sync | Runs several watch scripts concurrently and starts `browser-sync`.             |

## Block editor support

embepiercing comes with support for the [block editor](https://wordpress.org/support/article/wordpress-editor/).

A basic setup for `theme.json` is included. This also means that you need to at least use WordPress 5.8. If you wan't to support earlier WordPress versions, you can use an [older version](https://github.com/jeffreyvr/embepiercing/tree/0.1.1) of embepiercing instead.

CSS-classes for alignment (full, wide etc.) are generated automatically. You can opt-out on this by removing the plugin from the `tailwind.config.js` file.

To make the editing experience within the block editor more in line with the front end styling, a `editor-style.css` is generated.

### Define theme colors and font sizes

Several colors and font sizes are defined from the beginning. You can modify them in `theme.json`.

## Links

- [embepiercing website](https://embepiercing.io)
- [Screencasts](https://www.youtube.com/playlist?list=PL6GBdOp044SHIOSCZejodwr1HcYsC43wG)
- [Tailwind CSS Documentation](https://tailwindcss.com/docs)
- [Esbuild Documentation](https://esbuild.github.io)

## Contributors

- [Jeffrey van Rossum](https://github.com/jeffreyvr)
- [All contributors](https://github.com/jeffreyvr/embepiercing/graphs/contributors)

## License

MIT. Please see the [License File](/LICENSE) for more information.
