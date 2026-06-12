---
name: 14-doctor
description: 系統健康檢查 — 列出所有已裝工具的版本與狀態。
---

# 14-系統健康檢查

這個技能會幫你檢查電腦上所有工具是否都正常運作。

## 檢查清單

請依序執行以下檢查：

### Node.js
```powershell
node --version
```

### npm
```powershell
npm --version
```

### Python
```powershell
python --version
```

### Git
```powershell
git --version
```

### GitHub CLI
```powershell
gh --version
```

### Netlify CLI (如果有裝)
```powershell
netlify --version
```

### Firebase CLI (如果有裝)
```powershell
firebase --version
```

### Supabase CLI (如果有裝)
```powershell
supabase --version
```

### Ollama (如果有裝)
```powershell
ollama --version
```

### NotebookLM (如果有裝)
```powershell
nlm --version
```

## 結果回報

AI 會幫你整理一份檢查報告：

```
📋 系統健康檢查報告
─────────────────────
✅ Node.js     v18.17.0
✅ npm         9.6.7
✅ Python      3.11.5
✅ Git         2.41.0
✅ GitHub CLI  2.32.0
✅ Netlify     17.0.0
⚠️ Firebase    未安裝
⚠️ Supabase   未安裝
✅ Ollama      0.1.32
✅ NotebookLM  2.1.0
─────────────────────
10 項檢查：7 項正常，3 項未安裝
```

## 工具包完整性檢查

除了工具本身，也檢查 ckhotgav-tools 工具包是否完整、是否為最新版。

### 檢查方式

先確認工具包位置（自動偵測）：
1. AI 從自身 SKILL.md 所在目錄（`skills/14-doctor/`）往上兩層即為 repo root
2. 若無法定位，搜尋檔案系統中含 `.git` 且 remote 為 ckhotgav-tools 的目錄
3. 若仍找不到，問使用者工具包放在哪，或是否要從 GitHub 下載

### 技能目錄完整性

比對已安裝的技能 vs 本技能清單：

| 技能編號 | 名稱 | 檢查方式 |
|:--------:|:-----|:---------|
| 00 | 一鍵全裝 | `Test-Path skills/00-install-all/SKILL.md` |
| 01 | 環境建置 | `Test-Path skills/01-env-setup/SKILL.md` |
| 02 | NotebookLM | `Test-Path skills/02-notebooklm/SKILL.md` |
| 03 | GitHub | `Test-Path skills/03-github/SKILL.md` |
| 04 | Netlify | `Test-Path skills/04-netlify/SKILL.md` |
| 05 | GAS | `Test-Path skills/05-gas/SKILL.md` |
| 06 | Supabase | `Test-Path skills/06-supabase/SKILL.md` |
| 07 | Firebase | `Test-Path skills/07-firebase/SKILL.md` |
| 08 | Ollama | `Test-Path skills/08-ollama/SKILL.md` |
| 09 | Gemini | `Test-Path skills/09-gemini/SKILL.md` |
| 10 | 生圖 | `Test-Path skills/10-draw/SKILL.md` |
| 11 | Obsidian | `Test-Path skills/11-obsidian/SKILL.md` |
| 12 | 知識管理 | `Test-Path skills/12-knowledge-guide/SKILL.md` |
| 13 | 專案助理 | `Test-Path skills/13-project-assistant/SKILL.md` |
| 14 | 健康檢查 | `Test-Path skills/14-doctor/SKILL.md` |
| 15 | 一鍵升級 | `Test-Path skills/15-upgrade/SKILL.md` |
| 16 | 疑難排解 | `Test-Path skills/16-troubleshoot/SKILL.md` |
| 17 | 其他編輯器 | `Test-Path skills/17-other-editors/SKILL.md` |
| 18 | 其他部署 | `Test-Path skills/18-other-deploy/SKILL.md` |
| 19 | FTP 免費空間 | `Test-Path skills/19-ftp-hosting/SKILL.md` |
| 20 | PHP+MySQL | `Test-Path skills/20-ftp-php/SKILL.md` |

### Git 版本檢查

確認是否落後遠端：
```powershell
git fetch
git log HEAD..origin/master --oneline
```
- 如果有輸出代表有未 pull 的變更 → 建議執行 `git pull`
- 如果沒有輸出代表已是最新版

### OpenCode 部署檢查

比對技能目錄 vs 編輯器安裝狀態：
- 檢查 `$env:USERPROFILE\.config\opencode\skills\` 中有哪些技能已部署（Windows）或 `~/.config/opencode/skills/`（Mac/Linux）
- 列出已安裝 vs 未安裝的技能編號

## 最終建議

報告輸出完後，根據結果給出 3 個層級的建議：

**🔴 必須修復**（工具版本問題）
- Node.js/Python/Git 等基礎工具未安裝或版本過舊
- GitHub/Netlify 未登入

**🟡 建議更新**（工具包狀態）
- 技能目錄缺少 → 建議重新 clone 或下載
- Git 落後遠端 → 建議 `git pull`
- OpenCode 未部署 → 建議安裝到編輯器

**🟢 下一步推薦**（選用安裝）
- 根據使用者已裝的技能，推薦下一個該裝的
- 例如：已裝 11-Obsidian → 推薦 12-知識管理
- 例如：已裝 04-Netlify → 推薦 05-GAS 或 19-FTP

## 遇到問題？

如果有工具顯示錯誤或找不到，安裝技能 16（疑難排解）來解決。
