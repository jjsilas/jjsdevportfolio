# Technical Portfolio & Brand Platform

This repository contains the source code for my professional portfolio and the digital home of **'Our Dirt Therapy'**. 

## 🛠️ The Tech Stack
* **Frontend:** HTML5, CSS3, Font Awesome
* **Deployment:** GitHub Actions (CI/CD)
* **Hosting:** AwardSpace (Premium)

## 🚀 Deployment Pipeline (My CI/CD Solution)
To solve the problem of manual file management and ensure high availability, I engineered a custom **CI/CD pipeline**:
1. **Version Control:** All changes are tracked via Git.
2. **Automation:** A GitHub Action is triggered on every `git push`.
3. **Secure Sync:** The workflow automatically synchronizes files to my AwardSpace production server via SFTP.

> **Why this matters:** This setup eliminates human error during deployment and ensures that my "Proof of Life" content—the Dirt Therapy adventures—is always up-to-date for my audience and potential collaborators.