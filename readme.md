# Startup Community Guide

Team:

- [Rachel VanBoening](http://github.com/rvanboening)
- [Emily Johnson](http://github.com/emjo91)
- [Skyler Sidner](http://github.com/skylersidner)
- [CharDale Barnes](http://github.com/ioscowboi)

---

This project is meant to be a welcome guide to Omaha's startup community. Over time, it might evolve to contain a job board, a calendar, and other features; but for now the immediate objectives are as follows:

- **Homepage**, with a few important links.
- Template: **"Welcome Guide"** -- Static content, organized well. Example: http://atxwebshow.com/welcome
- Template: **"Map"** -- A full-screen map from Startup Genome. There is pre-existing embed code we will use.
- Template: **"Report"** -- An infographic that a designer is making. This asset will be delivered to us.
- Template: **"Page"** -- A standard page (of which there might be many) that contains headers, text, and media.

The most important goals for this project are:

1. It should look great.
2. It should be easily copied by or shared with other communities who want a similar guide.

---

## Development Plan

There are a few milestones for this project:

1. **Front-end design** -- This is a clickable/functional implementation of the site's various pages. HTML/CSS/JavaScript only. Fake content.
  - There is already a logo: http://cl.ly/aNkG/StartupWeekendShirt_Final.ai
  - We'll use a CSS framework, like Bootstrap or Foundation (or a new one, like the one GitHub just launched!), to streamline some of our work.
    - Additional CSS will be implemented using some kind of object-oriented CSS approach.
2. **WordPress theme** -- This is the _view layer_ of the database-driven website. Achieving this milestone involves cutting up the front-end design files into various partials and replacing the fake content with actual PHP/WordPress functions that yield content from the database.
3. **Deployment** -- We'll deploy to Flywheel and set up a custom domain, which the client will purchase for us.
4. **Open-sourcing** -- The theme that we build will be open-sourced. Others should be able to download the theme via the repo directly, unzip it into their own WordPress installation, and have their own site up and running quickly.
  - Part of this means writing documentation. The Readme for the repo should be updated to have instructions to adding the Welcome Guide, Map, and Report pages mentioned above. And maybe even a plug for hosting on Flywheel.