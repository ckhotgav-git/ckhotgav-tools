---
name: 19-ftp-hosting
description: FTP 免費主機 — 使用 ProFreeHost 免費架設網站與建立 MySQL 資料庫。
---

# 19-FTP 免費主機（網站架設）

這個技能教你用 **ProFreeHost** 這個免費主機，把網頁放到網路上，讓任何人都能瀏覽。

## 什麼是網站主機？

就像在網路上「租一塊地來蓋房子」——主機就是那塊地，你的網頁檔案和資料庫都放在裡面。

## 什麼是 FTP？

FTP 就像網路的「檔案總管」，把你的電腦檔案傳送到主機上。傳上去之後，全世界都能看到你的網站。

---

## 1. 註冊 ProFreeHost 帳號

用瀏覽器打開 [https://profreehost.com/register](https://profreehost.com/register)，填入：

- **Email**：你的信箱（用來收驗證信）
- **Password**：設定密碼
- 填完後點「Register」，去信箱收驗證信並點擊啟用

## 2. 找到你的 FTP 連線資訊

登入 ProFreeHost 控制台後：

1. 左邊選單點「FTP 帳號」(FTP Accounts)
2. 你會看到一組資料：
   - **FTP 主機**（例如 `ftp.yourdomain.profreehost.com`）
   - **帳號**（通常就是你的使用者名稱）
   - **密碼**（點「顯示」或重設）
3. 把這三項記下來，等等會用到

## 3. 安裝 FileZilla（圖形化上傳）

### Windows
去 [https://filezilla-project.org](https://filezilla-project.org) 下載 FileZilla Client 並安裝。

### Mac
去官網下載 macOS 版本，或透過 Homebrew：
```bash
brew install --cask filezilla
```

### 連線步驟
1. 打開 FileZilla
2. 在上方填入：
   - 主機：你的 FTP 主機
   - 使用者名稱：你的帳號
   - 密碼：你的密碼
   - 連接埠：`21`
3. 點「快速連線」
4. 右邊看到主機的檔案，就代表連線成功！

### 替代方案：用 CLI 指令上傳

不想裝軟體的話，也可以用指令上傳。

### Windows (PowerShell)
```powershell
# 安裝 ftp CLI 工具
npm install -g ftp-cli

# 上傳檔案
ftp -s:upload.txt
```

### Mac
```bash
# 用內建 curl 上傳
curl -T index.html ftp://你的帳號:你的密碼@你的FTP主機/public_html/index.html
```

## 4. 上傳你的第一個網頁

請 AI 幫你產生一個 `index.html`，或使用下面的範例：

對你的 AI 編輯器說：
```
請幫我寫一份 index.html，內容是「點哥AI全能工具箱」的介紹頁面，
風格是深色科技風，包含：
1. 點哥AI全能工具箱是什麼的簡介
2. GitHub 連結 https://github.com/ckhotgav-git/ckhotgav-tools
3. 用白話解釋什麼是「網站主機」和「FTP」
4. 一段醒目的免費主機提醒：
   - 僅供練習，正式上線需購買付費主機
   - ProFreeHost 若連續 30 天無人瀏覽，會發信警告，仍無處理將刪除帳號
5. 頁尾註明「由 ProFreeHost 免費主機代管」
```

寫好後，把 `index.html` 用 FileZilla 拖曳到右邊的 `public_html` 資料夾。

### 確認網站上線
打開瀏覽器，輸入你的網址（例如 `https://你的帳號.profreehost.com`），看到網頁就成功了！

## 5. 建立 MySQL 資料庫

回到 ProFreeHost 控制台：

1. 左邊選單點「MySQL 資料庫」(MySQL Databases)
2. 在「建立新資料庫」輸入名稱（例如 `mydb`），點「建立」
3. 往下滑到「新增使用者」，輸入使用者名稱和密碼，點「建立」
4. 在「新增使用者到資料庫」把剛剛建立的使用者加到資料庫，權限選「全部」
5. 記下以下資訊（等等技能 20 會用到）：
   - 資料庫名稱
   - 資料庫使用者
   - 資料庫密碼
   - 資料庫主機（通常是 `localhost`）

## ✅ 完成

你已經學會了：
- 註冊免費主機
- 用 FTP 上傳網頁
- 建立 MySQL 資料庫

下一步：安裝 **技能 20 (PHP + MySQL)** 來製作動態網站！
