---
name: 16-troubleshoot
description: 疑難排解 — 常見錯誤與修復流程。
---

# 16-疑難排解

遇到問題了嗎？以下整理最常見的錯誤和解決方法。

---

## 1. 「node 不是內部或外部命令」

**原因**：Node.js 沒裝好或路徑設定有問題。

**解決方法**：
1. 重新開機
2. 如果還是不行，重新安裝 Node.js（安裝時記得用預設路徑）

---

## 2. 「Python 不是內部或外部命令」

**原因**：安裝 Python 時忘了勾選「Add Python to PATH」。

**解決方法**：
1. 重新執行 Python 安裝檔
2. **這次一定要記得勾選「Add Python to PATH」**
3. 安裝完重開終端機

---

## 3. 「nlm 不是內部或外部命令」

**原因**：Python 套件沒裝好。

**解決方法**：
```powershell
pip install notebooklm-mcp-cli
```
### Mac
```bash
pip3 install notebooklm-mcp-cli
```

---

## 4. Git 說「Please tell me who you are」

**原因**：忘記設定使用者名稱和 Email。

**解決方法**：
```powershell
git config --global user.name "你的名字"
git config --global user.email "你的信箱@gmail.com"
```

---

## 5. 「權限不足」或「Access Denied」

### Windows
1. 在「開始」搜尋 PowerShell
2. 按右鍵「以系統管理員身分執行」
3. 再執行一次原本的指令

### Mac
在指令前面加上 `sudo`，例如：
```bash
sudo npm install -g netlify-cli
```

---

## 6. 瀏覽器沒有自動跳出登入畫面

**原因**：有時候防火牆或瀏覽器設定會擋住。

**解決方法**：
1. 手動複製終端機中出現的網址
2. 貼到瀏覽器打開
3. 完成登入後回到終端機按 Enter

---

---

## 7. Obsidian Web Clipper 無法連線到 Obsidian

**原因**：外掛找不到你的 Obsidian Vault，或 Obsidian 本機伺服器沒啟動。

**解決方法**：
1. 確認 Obsidian 有在執行（打開 Obsidian 視窗）
2. 在 Obsidian 中開啟設定 →「第三方外掛」→ 確認「Obsidian REST API」已啟用
3. 點 Chrome 右上角 Web Clipper 圖示 → 設定 → 重新選擇 Vault 路徑
4. 如果還是不行，解除安裝外掛重新安裝一次

---

## 8. Obsidian Web Clipper 剪下來的內容格式亂掉

**原因**：部分網站結構較複雜，Clipper 無法完美解析。

**解決方法**：
1. 切換到「簡化模式」(Simplified) 再試一次
2. 先複製純文字貼到 Obsidian 收件匣，再請 AI 幫你格式化
3. 對 AI 說：「幫我把這段剪貼內容整理成乾淨的 Markdown 格式」

---

## 9. Kortex 無法連線到 NotebookLM

**原因**：NotebookLM 登入狀態過期或 MCP 設定未完成。

**解決方法**：
1. 確認已安裝 skill 02 (NotebookLM) 且 `nlm login` 成功
2. 打開瀏覽器，確認已登入 Google 帳號且可正常開啟 [NotebookLM](https://notebooklm.google.com)
3. 點 Kortex 圖示 → 設定 → 重新授權 Google 帳號
4. 若仍無法連線，在終端機執行：
```powershell
nlm login --force
```

---

## 10. YouTube to NotebookLM 按鈕沒出現

**原因**：外掛安裝後未啟用，或 YouTube 頁面未重新整理。

**解決方法**：
1. 確認 Chrome 右上角有外掛圖示，且為啟用狀態（彩色）
2. 重新整理 YouTube 頁面（按 F5）
3. 如果還是沒出現，去 Chrome 擴充功能管理員 → 確認權限已允許存取 YouTube
4. 對 AI 說：「請幫我檢查 YouTube to NotebookLM 外掛是否正確安裝」

---

## 11. NotebookLM 筆記沒有同步到 Obsidian

**原因**：兩套系統沒有建立連線，或 MCPVault 設定不完整。

**解決方法**：
1. 確認已安裝技能 11 (Obsidian MCPVault)
2. 確認已安裝技能 02 (NotebookLM MCP)
3. 對 AI 說：「請幫我檢查 NotebookLM 和 Obsidian 的 MCP 設定是否正確」
4. 需要手動備份時，直接對 AI 說：「幫我把這篇 Obsidian 筆記送到 NotebookLM」

---

## 12. 「nlm」指令找不到或過期

**原因**：NotebookLM CLI 版本過舊或 Python 環境問題。

**解決方法**：
```powershell
pip install --upgrade notebooklm-mcp-cli
```
### Mac
```bash
pip3 install --upgrade notebooklm-mcp-cli
```

---

## 還是不行？

把所有錯誤訊息複製貼上，對 AI 說：
> 「我遇到了這個錯誤：[貼上錯誤訊息]，幫我看看怎麼解決」
