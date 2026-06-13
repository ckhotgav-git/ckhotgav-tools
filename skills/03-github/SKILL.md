---
name: 03-github
description: GitHub 版本控制 — 版本控制、帳號登入、避坑指南。
---

# 03-GitHub 版本控制

GitHub 是程式碼的「雲端時光機」。寫程式最怕不小心弄壞原本寫好的東西，GitHub 可以隨時還原！

## 1. 安裝 Git

### Windows
```powershell
winget install --id Git.Git -e --source winget
```
如果安裝失敗，去 [Git 官網](https://gitforwindows.org/) 手動下載安裝。

### Mac
```bash
brew install git
```

**安裝完請重啟你的 AI 編輯器！**

## 2. 安裝 GitHub CLI

### Windows
```powershell
winget install --id GitHub.cli -e --source winget
```
如果失敗，去 [GitHub CLI 官網](https://cli.github.com/) 下載。

### Mac
```bash
brew install gh
```

## 3. 登入 GitHub

在終端機輸入：
```powershell
gh auth login --web --git-protocol https
```
一直按 Enter，瀏覽器會打開，登入你的 GitHub 帳號。

## 4. 告訴電腦你是誰

```powershell
git config --global user.name "你的英文名字或暱稱"
git config --global user.email "你的信箱@gmail.com"
```

## 5. 測試一下

```powershell
gh auth status
```
看到「Logged in to github.com」就代表成功了！

## 6. 建立新專案上傳（預設私人）

建立新 GitHub 倉庫時，**一律設為私人**（private），避免 API Key 等機密外洩：

```powershell
# 在專案資料夾內執行：
gh repo create 專案名稱 --private --source=. --remote=origin --push
```

若不小心設成公開，可事後改回：
```powershell
gh repo edit 帳號/專案名稱 --visibility private --accept-visibility-change-consequences
```

## 7. 每次上傳前的安全檢查

```powershell
# 檢查是否有 API Key 或密碼被誤加進 git
git diff --cached | Select-String -Pattern "sk-|gsk_|AIza|ghp_|api_key"
```

如果有出現結果，表示有機密即將被上傳，請先加入 .gitignore 再 commit。

## ✅ 完成

GitHub 已設定完成！你的程式碼從此有雲端時光機保護了。
