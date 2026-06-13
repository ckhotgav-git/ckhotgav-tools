# ckhotgav-tools — AI 注意事項

## 這個專案在做什麼
AI 編輯器 (Antigravity/OpenCode) 新手全能懶人包。幫完全不懂程式的新手快速建立 AI 開發環境。

## 重要原則
- 所有說明必須**新手友善**：用白話中文、避免程式術語、每一步解釋為什麼
- 每個技能都可以**獨立安裝**，使用者可以選裝部分技能
- 主文件 `點哥AI全能工具箱.md` 提供完整從頭到尾的流程
- skills 資料夾讓 AI 可以自動安裝
- 操作說明、使用教學、開發計畫一律寫在 GUIDE.md
- **本工具包為公開 repo**（供新手取用）；但為使用者建立新專案時，GitHub 倉庫一律預設 private，除非使用者明確要求公開

## 平台支援
以 Windows 為主撰寫。Mac 使用者看到 `winget` 或 `PowerShell` 指令時，AI 要自動轉成 `brew` 或 `zsh`。

## 開發流程
1. 開工時讀取 PROJECT.md
2. 新增或修改 skill 後測試可獨立安裝
3. 完成後更新 PROJECT.md 進度
