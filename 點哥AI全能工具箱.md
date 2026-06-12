# 🧰 點哥AI全能工具箱：從零開始的魔法學徒指南

嗨！如果你**完全不懂寫程式**，但又想指揮 AI 幫你做出超酷的網頁、自動化工具或個人知識庫，這篇指南就是為你量身打造的！

我們將使用目前最熱門的 AI 編輯器：**Antigravity** 與 **OpenCode**。這兩款工具就像是你的「虛擬工程師」，你只要動嘴巴下指令，他們就會幫你寫出複雜的程式碼。

---

## 🖥️ 你是 Windows 還是 Mac？

本懶人包以 **Windows** 為主撰寫。
如果你是 **Mac** 使用者不用擔心，遇到指令時 AI 會自動幫你轉換成對應版本。

**快速對照表：**

| 情境 | Windows | Mac |
|------|---------|-----|
| 終端機名稱 | PowerShell | Terminal (zsh) |
| 安裝套件 | `winget install` | `brew install` |
| npm 指令 | `npm` | `npm` |
| 路徑寫法 | `C:\Users\名字\` | `~/` 或 `/Users/名字/` |

---

## 🎯 我可以裝哪些技能？

這個工具箱共有 21 項技能，每一項都可以**獨立選擇要不要安裝**：

| 編號 | 技能名稱 | 難度 | 說明 |
|------|---------|:----:|------|
| **00** | 一鍵全裝 | 🟢 | 一次裝全部，省事 |
| **01** | 基礎環境建置 | 🟢 | 一定要先裝這個！ |
| **02** | NotebookLM 知識庫 | 🟢 | AI 知識庫 |
| **03** | GitHub 版本控制 | 🟢 | 程式碼的雲端時光機 |
| **04** | Netlify 一鍵部署 | 🟢 | 把網頁放到網路上 |
| **05** | Google Apps Script | 🟡 | 雲端自動化腳本 |
| **06** | Supabase 資料庫 | 🟡 | 免費雲端資料庫 |
| **07** | Firebase 資料庫 | 🟡 | Google 雲端資料庫 |
| **08** | Ollama 本地AI | 🟡 | 在自己的電腦跑 AI |
| **09** | Gemini 免費API | 🟡 | Google 免費 AI |
| **10** | 生成圖片 | 🟢 | 讓 AI 幫你畫圖 |
| **11** | Obsidian 知識管理系統 | 🟢 | 連接你的筆記本 |
| **12** | 知識管理系統設定引導 | 🟢 | 學會整理知識 |
| **13** | 專案助理 | 🟢 | 開工收工自動化 |
| **14** | 系統健康檢查 | 🟢 | 檢查工具是否正常 |
| **15** | 一鍵升級工具 | 🟢 | 全部更新到最新 |
| **16** | 疑難排解 | 🟢 | 遇到問題看這裡 |
| **17** | 其他AI編輯器 | 🟡 | 進階選用 |
| **18** | 其他部署平台 | 🟡 | 進階選用 |
| **19** | FTP 免費主機 | 🟡 | 免費架站 + MySQL 資料庫 |
| **20** | PHP + MySQL 進階 | 🟡 | 動態網站資料庫連線 |

> 🟢 = 新手友善　🟡 = 有一點基礎再裝

---

## 🚀 新手推薦安裝順序

如果你是第一次接觸，建議照這個順序來：

### 第一階段：打基礎（一定要裝）

```
00 → 01 → 02 → 03 → 04
```

### 第二階段：學會整理知識

```
11 → 12 → 13
```

### 第三階段：進階火力

```
06 → 07 → 08 → 09 → 10 → 19 → 20
```

### 備用工具（有問題再裝）

```
14 → 15 → 16
```

### 選用擴充（有需要才裝）

```
05 → 17 → 18
```

---

## 🛠️ 開始安裝吧！

你可以選擇以下任一方式開始：

### 方式一：讓 AI 幫你裝（最簡單）

複製這行貼給你的 AI 編輯器：

```
這是點哥AI全能工具箱 https://github.com/ckhotgav-git/ckhotgav-tools
請讀取 repo 內容，列出所有可用的技能，問我要安裝哪些，然後自動幫我安裝。
```

### 方式二：一步一步自己裝

繼續往下讀，每一個章節都是一個技能，照著做就可以了！

---

# 技能 00：一鍵全裝

適合想要一次搞定的人。會依序安裝技能 01 到 15。

準備好了嗎？打開你的 AI 編輯器，對它說：

```
我要安裝點哥AI全能工具箱的全部技能，請幫我一個一個裝。
```

---

# 技能 01：基礎環境建置

在開始之前，你的電腦需要先安裝幾個「底層工具」。這就像在手機上裝 APP 一樣簡單。

## 1. 打開你的終端機

在 AI 編輯器最下方，會有一個黑色的輸入框，叫做**終端機**或 **Terminal**。這就是你對電腦下指令的地方。

## 2. 設定執行權限

### Windows 使用者
Windows 會阻擋一些自動化腳本。請照著做：
1. 在「開始」選單搜尋 `PowerShell`
2. 按右鍵選**「以系統管理員身分執行」**
3. 複製貼上這行，按 Enter：
```powershell
Set-ExecutionPolicy RemoteSigned -Scope CurrentUser
```
4. 如果問你是否確定，輸入 `Y` 按 Enter

### Mac 使用者
Mac 不需要做這個步驟，可以直接跳過。

## 3. 安裝 Node.js

Node.js 是讓你的電腦能執行 JavaScript 程式的工具。

### Windows
```powershell
winget install --id OpenJS.NodeJS.LTS -e --source winget
```

### Mac
```bash
brew install node
```

安裝完後，關掉終端機重新打開，輸入以下指令確認有裝好：
```powershell
node --version
npm --version
```
如果有出現版本號碼（例如 v18.xxx），就代表成功了！

## 4. 安裝 Python

### Windows
1. 去 [Python 官網](https://www.python.org/downloads/) 下載最新版
2. **安裝時第一件事：一定要勾選「Add Python to PATH」**（非常重要！）
3. 其他一直按下一步就好

### Mac
```bash
brew install python
```

安裝完後確認：
```powershell
python --version
```

---

**✅ 完成！接下來可以安裝技能 02**

---

# 技能 02：NotebookLM 知識庫

NotebookLM 是 Google 的 AI 知識庫工具。裝好之後，你的 AI 編輯器就能直接把資料丟進 NotebookLM 整理分析。

## 1. 安裝連線工具

在終端機輸入：
```powershell
pip install notebooklm-mcp-cli
```

### Mac
```bash
pip3 install notebooklm-mcp-cli
```

## 2. 登入 Google 帳號

```powershell
nlm login
```
瀏覽器會自動跳出來，登入你的 Google 帳號並允許授權。

## 3. 綁定你的 AI 編輯器

### 如果你用 Antigravity
```powershell
nlm setup add antigravity
```

### 如果你用 OpenCode
```powershell
nlm setup add opencode
```

## 4. 測試看看

```powershell
nlm list notebooks
```
如果有看到筆記本清單，就代表成功了！

---

**✅ 完成！接下來可以安裝技能 03**

---

# 技能 03：GitHub 版本控制

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

---

**✅ 完成！接下來可以安裝技能 04**

---

# 技能 04：Netlify 一鍵部署

Netlify 可以讓你做的網頁**一鍵發布到網路上**，任何人都能用手機或電腦打開來看！

## 1. 安裝 Netlify 工具

```powershell
npm install -g netlify-cli
```

## 2. 登入 Netlify

```powershell
netlify login
```
瀏覽器會打開，用你的 GitHub 帳號登入即可。

## 3. 實戰：發布你的第一個網頁

對你的 AI 編輯器說：
```
請幫我寫一個精美的個人介紹網頁（包含 index.html, style.css），
主題是深色科技風。寫完之後，請直接使用 netlify deploy --prod 指令，
幫我把這個網頁發布到網路上，並把網址給我！
```

AI 會自動寫好網頁並上線，給你一個網址分享給任何人！

---

**✅ 完成！接下來可以安裝技能 05（選用）或跳到技能 11**

---

# 技能 05：Google Apps Script（選用）

Google Apps Script 是 Google 的自動化腳本工具。讓 AI 幫你寫好腳本，自動寄信、處理試算表！

## 1. 打開權限

用瀏覽器打開 [GAS 設定頁面](https://script.google.com/home/usersettings)，把「Google Apps Script API」開啟。

## 2. 安裝上傳工具

```powershell
npm install -g @google/clasp
```

## 3. 登入 Google

```powershell
clasp login
```

## 4. 實戰

對 AI 說：
```
請幫我寫一個 Google Apps Script，每天早上九點自動寄一封早安信給我。
用 clasp push 幫我上傳。
```

---

**✅ 完成！**

---

# 技能 06：Supabase 資料庫

Supabase 是一個免費的雲端資料庫。你的網站可以把資料存在裡面。

## 1. 註冊帳號

去 [https://supabase.com](https://supabase.com)，用 GitHub 登入，點「New project」。

## 2. 建立專案

1. 取專案名稱
2. 設定密碼（記下來！）
3. 區域選 Singapore 或 Tokyo
4. 點「Create new project」

## 3. 安裝 CLI

### Windows
```powershell
npm install -g supabase
```

### Mac
```bash
brew install supabase/tap/supabase
```

## 4. 讓 AI 幫你用

對 AI 說：
```
我有一個 Supabase 專案，請幫我建立一個會員資料表，
裡面有 name、email、created_at 三個欄位。
```

---

**✅ 完成！**

---

# 技能 07：Firebase 資料庫

Firebase 是 Google 的雲端資料庫。

## 1. 註冊

去 [https://firebase.google.com](https://firebase.google.com)，用 Google 帳號登入，點「建立專案」。

## 2. 安裝 CLI

```powershell
npm install -g firebase-tools
```

## 3. 登入

```powershell
firebase login
```

## 4. 讓 AI 幫你用

對 AI 說：
```
我有一個 Firebase 專案，請幫我初始化 Firestore，
建立一個 products 集合存放商品資料。
```

---

**✅ 完成！**

---

# 技能 08：Ollama 本地AI

Ollama 讓你在自己的電腦上執行 AI 模型，完全免費、不需網路！

## 1. 安裝

去 [https://ollama.com/download](https://ollama.com/download) 下載安裝。

## 2. 下載模型

```powershell
ollama pull llama3.2
```

## 3. 測試

```powershell
ollama run llama3.2
```
輸入「你好」，AI 回應你就成功了！輸入 `/bye` 退出。

---

**✅ 完成！**

---

# 技能 09：Gemini 免費API

Gemini 是 Google 提供的免費 AI API。

## 1. 取得 API 金鑰

去 [Google AI Studio](https://aistudio.google.com/apikey)，登入後點「建立 API 金鑰」。

## 2. 安裝 SDK

```powershell
npm install @google/generative-ai
```

## 3. 讓 AI 幫你寫測試

對 AI 說：
```
我有一組 Gemini API 金鑰：[貼上金鑰]
請幫我寫一支程式測試能不能用。
```

---

**✅ 完成！**

---

# 技能 10：生成圖片

讓 AI 幫你畫圖！

### 最簡單的方式
直接對 AI 說：
```
請幫我畫一張「一隻可愛的柴犬在沙灘上跑步」的圖片
```

### 進階方式
如果有 OpenAI API 金鑰，可以請 AI 幫你用 gpt-image-2 生圖。

---

**✅ 完成！**

---

# 技能 11：Obsidian 知識管理系統

這個技能教你「怎麼裝」Obsidian。

## 1. 下載安裝

去 [Obsidian 官網](https://obsidian.md/) 下載安裝。

## 2. 建立或找到筆記庫

打開 Obsidian，建立新筆記庫或選你原來的。

### 不知道 Vault 在哪？

對 AI 說：「請幫我搜尋電腦中的 Obsidian Vault 位置」
AI 會自動幫你找。

### 如果你用 Google Drive / OneDrive 同步

- 等雲端圖示顯示「已完成同步」再打開 Obsidian
- 不要同時從兩台電腦編輯同一篇筆記

## 3. 安裝 MCPVault

對 AI 說：
```
我已經安裝了 Obsidian，筆記庫在 [你的筆記庫路徑]，
請幫我安裝 MCPVault。
```

### 如果 AI 自動設定失敗

AI 會教你手動編輯設定檔，照著做即可。

## 4. 重新啟動 AI 編輯器

## 5. 跑驗證檢查

請 AI 幫你檢查以下項目是否都通過：
- Obsidian 已安裝
- MCPVault 已安裝
- AI 可以讀寫你的 Obsidian 筆記

---

**✅ 完成！接下來安裝技能 12 學會怎麼整理知識**

---

# 技能 12：知識管理系統設定引導

這個技能教你「怎麼用」Obsidian 整理知識。

## 三層結構

把你的知識庫分成三層：

```
📁 你的知識庫/
├── 📥 收件匣/     # 臨時想法
├── 📂 專案/       # 進行中的事
└── 🏛️ 知識庫/    # 整理好的知識
```

對 AI 說：「請在我的 Obsidian 知識庫中建立這三層結構。」

## 建立模板

對 AI 說：「請幫我建立一個「日記模板」，包含日期、完成了什麼、明天的計劃。」

## 進階：每週知識重整

裝好之後，以後只要對 AI 說「**整理**」或「**週整理**」，它就會自動：
1. 整理收件匣 → 搬到對應資料夾
2. 更新專案進度
3. 清理超過 30 天沒動的筆記
4. 可選備份到 NotebookLM

---

**✅ 完成！接下來安裝技能 13**

---

# 技能 13：專案助理

安裝三個全域技能，讓你的 AI 編輯器聽得懂「開工」「收工」「啟動專案」。

對 AI 說：
```
請幫我安裝 startup、shutdown、project-init 三個全域技能。
```

安裝後試試看：
| 你説 | 會發生什麼事 |
|------|-------------|
| 「開工」 | AI 讀取專案，告訴你今天要做什麼 |
| 「收工」 | AI 幫你存檔、備份、寫日誌 |
| 「啟動專案」 | AI 幫你建立完整的專案結構 |

---

**✅ 完成！**

---

# 技能 14：系統健康檢查

檢查所有工具是否正常。對 AI 說：

```
請幫我執行系統健康檢查，列出所有工具的版本。
```

AI 會幫你檢查 Node.js、npm、Python、Git、GitHub CLI 等工具。

---

# 技能 15：一鍵升級工具

把所有工具更新到最新版。對 AI 說：

```
請幫我執行一鍵升級，更新所有工具到最新版。
```

---

# 技能 16：疑難排解

遇到問題時，把錯誤訊息複製貼上，對 AI 說：

```
我遇到了這個錯誤：[貼上錯誤訊息]，幫我看看怎麼解決。
```

常見問題的快速解法也整理在 `skills/16-troubleshoot/SKILL.md` 中。

---

# 技能 17：其他AI編輯器（選用）

想試試 Claude Code、Codex CLI 或 Gemini CLI？請 AI 讀取 `skills/17-other-editors/SKILL.md` 來安裝。

---

# 技能 18：其他部署平台（選用）

想試試 Vercel、Cloudflare Pages 或 Railway？請 AI 讀取 `skills/18-other-deploy/SKILL.md` 來安裝。

---

# 技能 19：FTP 免費主機（選用）

這個技能教你用 **ProFreeHost** 免費主機把網頁放到網路上，並建立 MySQL 資料庫。

**適合對象**：想練習架站、想了解 FTP 和資料庫的新手。

## 1. 註冊 ProFreeHost

去 [https://profreehost.com/register](https://profreehost.com/register) 註冊帳號，收驗證信啟用。

## 2. 安裝 FileZilla 並連線

下載 [FileZilla](https://filezilla-project.org/)，填入控制台給你的 FTP 主機、帳號、密碼，連接埠 `21`。

不想裝軟體？也可以用指令：
```powershell
npm install -g ftp-cli
```

## 3. 上傳你的第一個網頁

對 AI 說：
```
請幫我寫一份 index.html，內容是「點哥AI全能工具箱」的介紹頁面，
風格深色科技風，包含點哥簡介、GitHub 連結、主機/FTP 白話解釋、
以及免費主機的重要提醒（30天未瀏覽會刪除）。
```

用 FileZilla 把 `index.html` 拖進 `public_html` 資料夾，打開瀏覽器輸入你的網址就看到成果了！

## 4. 建立 MySQL 資料庫

在 ProFreeHost 控制台：
1. 點「MySQL 資料庫」→ 建立資料庫
2. 建立資料庫使用者並設定密碼
3. 把使用者加到資料庫（權限全選）
4. 記下名稱、使用者、密碼（主機通常是 `localhost`）

---

**✅ 完成！下一步可安裝技能 20 升級為動態網站**

---

# 技能 20：PHP + MySQL 進階（選用）

**先决條件**：已完成技能 19，擁有 ProFreeHost 帳號與 MySQL 資料庫。

## 1. 讓 AI 幫你寫 PHP 程式

對 AI 說：
```
我有一個 ProFreeHost 免費主機，資料庫資訊如下：
- 資料庫名稱：[名稱]
- 使用者：[使用者]
- 密碼：[密碼]
- 主機：localhost

請幫我寫 db.php（連線檔）和 index.php（含訪客計數器），
用 mysqli 寫法，有錯誤處理。寫完給我程式碼。
```

## 2. 上傳 PHP 檔案

用 FileZilla 或 CLI 把 `.php` 檔案上傳到 `public_html`。

## 3. 測試

打開瀏覽器輸入 `你的網址/index.php`，看到「連線成功」+ 計數器就完成了！

如果出錯，把錯誤訊息貼給 AI 幫你修。

---

**✅ 完成！你現在擁有動態網站 + 資料庫了！**

---

## 🎉 恭喜你完成所有安裝！

你現在已經擁有了一個由 AI 驅動的全自動開發工作站！

別害怕犯錯，有任何想法，直接對著 AI 許願就對了。需要複習時，隨時回來翻這份指南。

**Happy coding！🚀**
