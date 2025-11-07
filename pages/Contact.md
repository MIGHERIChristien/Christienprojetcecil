# 📞 Contacts

Merci de votre visite sur mon site !  
Je suis **Christien Migheri**, développeur passionné par la technologie, la foi et les projets au service des communautés.

N’hésitez pas à me contacter pour :
- 💬 Discuter d’un projet ou d’une collaboration  
- 🧑‍💻 Poser des questions sur mes travaux  
- 🙏 Partager des idées liées à la gestion d’églises et à la technologie  

---

## 💌 Me contacter

📧 **Email :** [christienmigheri@gmail.com](mailto:migherichristien@gmail.com)  
🌐 **Site web :** [https://migherichristien.github.io/MIGHERIChristien/](https://migherichristien.github.io/MIGHERIChristien/)  
🐙 **GitHub :** [https://github.com/migherichristien](https://github.com/migherichristien)  

---

## 📍 À propos
Je suis basé en République Démocratique du Congo 🇨🇩,  
et je travaille sur divers projets visant à mettre la **technologie au service des paroisses et des communautés chrétiennes**.

---

> ✨ *“Le contact humain reste le plus beau des langages, même à l’ère du numérique.”* — Christien Migheri
```markdown
You can highlight `inline code` with backticks.
```

## How to structure page

Cecil automatically use the page file name as title, but you can also define title and other variables in the [front matter](https://cecil.app/documentation/content/#front-matter).

You can structure content using a heading. Headings in Markdown are indicated by a number of `#` at the start of the line.

```markdown
---
title: Page title
description: Page short description.
---

Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

## Heading

Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
```

## Image

Images use Cecil’s built-in optimized asset support.

![Cecil favicon](/favicon.png "Cecil favicon")

```markdown
![Cecil favicon](/favicon.png "Cecil favicon")
```

Cecil search images in `assets/` and `static/` folders, but relative path is also supported:

```markdown
![Cecil favicon](../assets/favicon.png "Cecil favicon")
```

## List

* Unordered list
* Unordered list
* Unordered list

1. Ordered list
2. Ordered list
3. Ordered list

* Level 1
  * Level 2
  * Level 2
    * Level 3
    * Level 3

## Blockquote

> This is a blockquote, which is commonly used when quoting another person or document.
>
> Blockquotes are indicated by a `>` at the start of each line.

```markdown
> This is a blockquote, which is commonly used when quoting another person or document.
>
> Blockquotes are indicated by a `>` at the start of each line.
```

## Code block

A code block is indicated by a block with three backticks ` ``` ` at the start and end. You can indicate the programming language being used after the opening backticks.

```php
// PHP code
$config = [
    'title'   => "My website",
    'baseurl' => 'http://localhost:8000/',
];

Builder::create($config)->build();
```

<pre>
```php
// PHP code
$config = [
    'title'   => "My website",
    'baseurl' => 'http://localhost:8000/',
];

Builder::create($config)->build();
```
</pre>

## There is a horizontal rule below this

---

## Definition list

First Term
: This is the definition of the first term.

Second Term
: This is one definition of the second term.
: This is another definition of the second term.

## Table

| Head 1       | Head 2            | Head 3 |
|:-------------|:------------------|:-------|
| ok           | good swedish fish | nice   |
| out of stock | good and plenty   | nice   |
| ok           | good `oreos`      | hmm    |
| ok           | good `zoute` drop | yumm   |

## Notes

:::
empty
:::

:::info
info
:::

:::tip
tip
:::

:::important
important
:::

:::warning
warning
:::

:::caution
caution
:::

```markdown
:::info|tip|important|warning|caution
Note here.
:::
```
