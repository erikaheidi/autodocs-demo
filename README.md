# Autodocs Demo

This repository contains a demo application implementing [Autodocs](https://github.com/erikaheidi/autodocs). To run this demo, you'll need PHP >= 8.2 and Composer.

## Running the Demo
Start by cloning this repository:

```shell
git clone https://github.com/erikaheidi/autodocs-demo.git
```

Then, install dependencies with Composer:

```shell
cd autodocs-demo
composer install
```
You may want to update the file `storage/cache/profile.json` with your own data:

```json
{
  "user": "Erika Heidi",
  "bio": "Software and Documentation Engineer",
  "projects": {
    "minicli/minicli": {
      "description": "CLI framework for PHP",
      "link": "https://docs.minicli.dev"
     },
    "erikaheidi/autodocs": {
      "description": "Tiny framework for automating documentation",
      "link": "https://github.com/erikaheidi/autodocs/wiki"
    }
  }
}
```

Then, run:

```shell
./autodocs build
```

You'll get output similar to this:

```shell
Starting Build...

Build finished. Output saved to /home/erika/Projects/autodocs-demo/config/../storage/content
```

Check your `storage/content` folder, and you should find a `README.md` file there with your rendered content:

```markdown
## Erika Heidi

Software and Documentation Engineer

## My PHP Projects

- [minicli/minicli](https://docs.minicli.dev): CLI framework for PHP
- [erikaheidi/autodocs](https://github.com/erikaheidi/autodocs/wiki): Tiny framework for automating documentation
```
