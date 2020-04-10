# OpenDash

[![first-timers-only](https://img.shields.io/badge/first--timers--only-friendly-tomato.svg?style=flat&logo=git)](https://github.com/twimbit/Feed-Amp-Theme/issues) [![GitHub stars](https://img.shields.io/github/stars/twimbit/Feed-Amp-Theme.svg?logo=github)](https://github.com/twimbit/Feed-Amp-Theme/stargazers) [![GitHub forks](https://img.shields.io/github/forks/twimbit/Feed-Amp-Theme.svg?logo=github&color=teal)](https://github.com/twimbit/Feed-Amp-Theme/network) [![GitHub top language](https://img.shields.io/github/languages/top/twimbit/Feed-Amp-Theme?color=yellow&logo=javascript)](https://github.com/twimbit/Feed-Amp-Theme) 

OpenDash is Twimbit's platform for Account Based Marketing Management. It acts as an extension to the existing CMS capabilities to handle complex functions and organise information.

## Tech Stack 

- **Frontend:** HTML5, CSS3, JavaScript, Amp, JQuery, JQuery UI
- **Backend:**  WordPress

## Getting Started

### System Requirements

You will be needing the following to support your development environment.

* [Git](https://git-scm.com/downloads)
* [mySQL](https://www.mysql.com/)
* [Linux Based Terminal](https://gitforwindows.org/), if you're using Windows and installed with Git.
* [Google Chrome](https://www.google.com/chrome/) or a decent latest web browser.
* Any Text Editor: Vim, Terminal, VS Code, etc.

### Installation Instructions

##### WordPress Installation

* [Download Xampp](https://www.apachefriends.org/download.html)

* Set up Apache Server and MySQL in the Xampp Control Panel

* [Download WordPress](https://wordpress.org/download/)

* Copy the extracted WordPress folder and Paste it to `.../Xampp/htdocs/`

* Open Chrome and type ` localhost/phpmyadmin `

* Create and configure a new database

* Type `localhost/<your downloaded wordpress folder name>/`

* Complete the WordPress installation by following the steps mentioned on the website

  - Default WordPress username: `root`

  - Default WordPress password: `<no password>`

* Configure the WordPress with site name, custom username and password

* Submit `Install WordPress`and `Login` with your custom credentials.

  WordPress is installed and configured. You should be able to access your Dashboard.

##### Theme Installation

* Clone the following theme and paste it under `.../Xampp/<Your Wordpress folder name>/wp-content/themes`

  - [OpenDash theme](https://github.com/twimbit/OpenDash.git)
  
* Activate the theme under`Wordpress Dashboard > Appearance`

  Theme is installed and activated. You should be able to see them in your Dashboard

##### Plugins Installation

* As this includes, automation, plugins will automatically be installed under Wordpress and can be seen under `WordPress Dashboard > Plugins `

* Additionally, clone the following plugin and paste them under `.../Xampp/<Your Wordpress folder name>/wp-content/plugins`

  - [pdf-js twimbit](https://github.com/twimbit/openDash-api.git)
  - [WP Mail SMTP by WPForms](https://wordpress.org/plugins/wp-mail-smtp/)

* Go to `Wordpress Dashboard > Private Content > Settings ` and configure accordingly 
* Go to `Wordpress Dashboard > Page > New Page` and configure accordingly

  Plugins are installed and activated. You should be able to see them in your Dashboard

##### Additional Installations

* Install [WP Webhooks]('https://wordpress.org/plugins/wp-webhooks/') 
  
  - Go to Wordpress > Settings > WP Webhooks
  
  - Go to Settings in Wp Webhooks and Activate the Triggers and Actions accordingly and save them
  
  - go to Receive data and copy the link from Webhook URL
  

All the resources are installed and activated

  > You are now ready to contribute to the [OpenDash](https://github.com/twimbit/OpenDash) project.


## Contribution Guidelines

[![GitHub issues](https://img.shields.io/github/issues/twimbit/Feed-Amp-Theme?logo=github)](https://github.com/codeuino/Feed-Amp-Theme/issues) ![GitHub pull requests](https://img.shields.io/github/issues-pr-raw/twimbit/Feed-Amp-Theme?logo=git&logoColor=white) ![GitHub contributors](https://img.shields.io/github/contributors/twimbit/Feed-Amp-Theme?logo=github) [![PRs Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg?style=flat&logo=git&logoColor=white)](https://github.com/twimbit)  [![GitHub last commit](https://img.shields.io/github/last-commit/twimbit/Feed-Amp-Theme?logo=github)](https://github.com/twimbit)[![twimbit](https://img.shields.io/badge/Author-@siddhantdante-gray.svg?colorA=gray&colorB=dodgerblue&logo=github)](https://github.com/siddhantdante) [![twimbit](https://img.shields.io/badge/Author-@amanintech-gray.svg?colorA=gray&colorB=dodgerblue&logo=github)](https://github.com/amanintech) 


- Please read our [Code of Conduct](https://github.com/twimbit/Feed-Amp-Theme/blob/master/CONTRIBUTING.md) and [Gitflow](https://github.com/twimbit/Feed-Amp-Theme/blob/master/CONTRIBUTING.md) for contributing towards the project.
- Write clear meaningful git commit messages (Do read [this](http://chris.beams.io/posts/git-commit/)).
- Make sure your PR's description contains GitHub's special keyword references that automatically close the related issue when the PR is merged. (Check [this](https://github.com/blog/1506-closing-issues-via-pull-requests) for more info)
- When you make very very minor changes to a PR of yours (like for example fixing a text in button, minor changes requested by reviewers) make sure you squash your commits afterwards so that you don't have an absurd number of commits for a very small fix. (Learn how to squash at [here](https://davidwalsh.name/squash-commits-git))
- When you're submitting a PR for a UI-related issue, it would be really awesome if you add a screenshot of your change or a link to a deployment where it can be tested out along with your PR. It makes it very easy for the reviewers and you'll also get reviews quicker.
- Always create PR to `develop` branch.


## Mentors

[![Open Source Love](https://badges.frapsoft.com/os/v2/open-source.svg?v=103)](https://github.com/twimbit/Feed-Amp-Theme) ![GitHub pull requests](https://img.shields.io/github/issues-pr-closed-raw/twimbit/Feed-Amp-Theme?logo=git&logoColor=white) 

| GitHub Usernames                                  | Domain |
| ---------------------------------------------------- | -------------------------- |
| Aman Sharma [(@amanintech)](https://github.com/amanintech) | Full Stack  |
| Siddhant Kumar [(@siddhantdante)](https://github.com/siddhantdante) | Full Stack  |         |

[![built with love](https://forthebadge.com/images/badges/built-with-love.svg)](https://github.com/AnjaliSharma1234/)
