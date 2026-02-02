# [Technical Portfolio & Projects]
![Deploy Status](https://github.com/jjsilas/jjsdevportfolio/actions/workflows/deploy.yml/badge.svg)

**Live Site:** [jherichsilas.com](https://jherichsilas.com)

This repository contains the source code for my professional portfolio and the digital home of my CV.

---

## 🛠️ The Tech Stack
* **Frontend:** HTML5, CSS3, Font Awesome [cite: 2026-01-18]
* **Deployment:** GitHub Actions (CI/CD) [cite: 2026-01-18]
* **Hosting:** AwardSpace [cite: 2026-01-18]

## 🚀 Technical Workflow
This repository is configured with an automated CI/CD pipeline to ensure the live site is always current.

* **Automation:** GitHub Actions triggers a deploy on every push to `main`. [cite: 2026-01-18]
* **Security:** Uses SFTP (SSH File Transfer Protocol) over port 221. [cite: 2026-01-18]
* **Optimization:** The deployment script automatically purges version control metadata (`.git`) and editor configs (`.vscode`) before transfer to maintain a lean server footprint. [cite: 2026-01-18]

## 💻 Development Environment
* **Local:** Mac Mini / VS Code [cite: 2026-01-18]
* **Remote:** AwardSpace Hosting via Secure Tunnel [cite: 2026-01-18]

> **Why this matters:** This setup eliminates human error during deployment and ensures the portfolio is always synchronized with the latest codebase.