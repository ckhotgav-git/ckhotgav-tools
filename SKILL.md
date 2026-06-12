---
name: ckhotgav-tools
description: >
  點哥AI全能工具箱 — AI 編輯器新手全能懶人包。
  支援 Windows / macOS。
  當使用者說「點哥」「懶人包」「ckhotgav」「安裝技能」「工具箱」等關鍵字時觸發。
  觸發後請讀取此 SKILL.md 列出所有技能 (00~18)，詢問使用者要安裝哪些，
  然後按照對應的 SKILL.md 指示逐步安裝。
  注意：若使用者是 Mac，自動將 winget / PowerShell 指令轉換為 brew / zsh。
---

# 🧰 點哥AI全能工具箱 — 技能清單

| 編號 | 技能 | 說明 |
|------|------|------|
| `00` | 一鍵全裝 | 一次裝完所有技能 |
| `01` | 基礎環境建置 | Node.js / Python / PowerShell 設定 |
| `02` | NotebookLM 知識庫 | NBLM / 知識庫 / MCP |
| `03` | GitHub 版本控制 | gh / 版控 / git |
| `04` | Netlify 一鍵部署 | 靜態網頁 / 部署 |
| `05` | Google Apps Script | GAS / clasp |
| `06` | Supabase 資料庫 | 雲端資料庫 |
| `07` | Firebase 資料庫 | Google 雲端資料庫 |
| `08` | Ollama 本地AI | 本機 AI 模型 |
| `09` | Gemini 免費API | Google 免費 AI API |
| `10` | 生成圖片 | AI 畫圖 / draw |
| `11` | Obsidian 知識管理系統 | 筆記 / Vault / MCPVault |
| `12` | 知識管理系統設定引導 | 三層結構 / 模板 / 整理知識 |
| `13` | 專案助理 | 開工 / 收工 / 啟動專案 / 初始化專案 |
| `14` | 系統健康檢查 | doctor / 檢查 / 版本狀態 |
| `15` | 一鍵升級工具 | 升級 / update |
| `16` | 疑難排解 | 報錯 / 失敗 / 修復 |
| `17` | 其他AI編輯器 | Claude Code / Gemini CLI / Codex CLI |
| `18` | 其他部署平台 | Vercel / Cloudflare / Railway |
| `19` | FTP 免費主機 | 架站 / ProFreeHost / 資料庫 |
| `20` | PHP + MySQL 進階 | 動態網站 / PHP / 資料庫連線 |

## 安裝流程

1. 讀取此 SKILL.md 後，列出上方所有技能
2. 逐一詢問使用者想安裝哪些
   - 可輸入「全部」
   - 可輸入編號組合，如「00,01,02,06,07」
   - 可輸入「新手五件套」（自動選 00,01,02,03,04）
- 可輸入「進階火力包」（自動選 06,07,08,09,10,19,20）
3. 依序讀取對應 `skills/<編號>/SKILL.md` 並執行安裝
4. 每安裝完一項，請確認使用者已完成，再繼續下一項

> ⚠️ **平台提示**：若偵測到 macOS，請自動將 winget / PowerShell 指令轉換為 brew / zsh 對應版本。

## 更新本懶人包

當使用者說「更新懶人包」時：
1. 引導使用者執行 `git pull`（若本機有 clone）
2. 重新讀取所有 SKILL.md 確認內容是否有變
3. 提示使用者哪些技能有更新
