# 系統畫面

## ◆訪客/會員 首頁
- 店家營業時間
  <a href="https://imgur.com/Ch1KZFM"/><img src="https://imgur.com/Ch1KZFM.png" title="source: imgur.com" /></a>

## ◆訪客/會員 查看美甲老師資訊
- 查看美甲師介紹
  <a href="https://imgur.com/ZZOYg6n"/><img src="https://imgur.com/ZZOYg6n.png" title="source: imgur.com" /></a>
## ◆訪客/會員 查看課程資訊
- 查看課程金額與介紹
  <a href="https://imgur.com/5vpc2mH"/><img src="https://imgur.com/5vpc2mH.png" title="source: imgur.com" /></a>

## ◆會員 預約課程
- 選擇課程後點擊預約，顯示所預約課程名稱以及課程金額，選擇預約日期時間及美甲老師
  <a href="https://imgur.com/qsbLoUi"/><img src="https://imgur.com/qsbLoUi.png" title="source: imgur.com" /></a>
## ◆查看預約紀錄
- 查看預約紀錄，並可取消預約
  <a href="https://imgur.com/ekJX6hw"/><img src="https://imgur.com/ekJX6hw.png" title="source: imgur.com" /></a>

## ◆後台老師管理
- 管理美甲老師，並可查看、新增、刪除、修改老師資料
  <a href="https://imgur.com/RUEqR6u"/><img src="https://imgur.com/RUEqR6u.png" title="source: imgur.com" /></a>
## ◆後台課程管理
- 管理課程，並可查看、新增、刪除、修改課程資料
  <a href="https://imgur.com/MBrm4fk"/><img src="https://imgur.com/MBrm4fk.png" title="source: imgur.com" /></a>
## ◆後台排班管理
- 管理排班，並可查看、新增、刪除、修改排班資料
  <a href="https://imgur.com/rMhMr77"/><img src="https://imgur.com/rMhMr77.png" title="source: imgur.com" /></a>
## ◆後台查看預約紀錄
- 查看預約紀錄
  <a href="https://imgur.com/fQq2Tow"/><img src="https://imgur.com/fQq2Tow.png" title="source: imgur.com" /></a>
## ◆後台查看會員資料
- 查看會員基本資料
  <a href="https://imgur.com/poteEsJ"/><img src="https://imgur.com/poteEsJ.png" title="source: imgur.com" /></a>

# 系統名稱及作用
美甲預約管理系統
- 會員可自行在網站上預約課程，查看或修改預約資訊
- 管理者可查看所有預約資訊，管理預約排程

# 系統的主要功能與負責的同學
★ 訪客
- 首頁 Route::get('/',[HomeController::class,'index'])->name('index'); [3A932003 徐千素](https://github.com/3a932003)

★ 前台
- 查看美甲老師 Route::get('staffs',[StaffsController::class,'index'])->name('staffs.index'); [3A932003 徐千素](https://github.com/3a932003)
- 查看課程 Route::get('classes',[ClassesController::class,'index'])->name('classes.index'); [3A932003 徐千素](https://github.com/3a932003)
- 會員預約 Route::get('classes/{class}/reserves/create',[ClassesReserveController::class,'create'])->name('classes.reserves.create'); [3A932045 曾翊晴](https://github.com/3A932045)

★ 後台
- 美甲老師管理 Route::get('staffs', [StaffsController::class, 'admin_index'])->name("staffs.index"); [3A932117 黃佳怡](https://github.com/3A932117)
- 課程管理 Route::get('classes', [ClassesController::class, 'admin_index'])->name("classes.index"); [3A932045 曾翊晴](https://github.com/3A932045)
- 排班管理 Route::get('schedules', [ScheduleController::class, 'index'])->name("schedules.index"); [3A932117 黃佳怡](https://github.com/3A932117)
- 查看會員預約 Route::get('reserves',[ReserveController::class,'admin_index'])->name('reserves.index'); [3A932045 曾翊晴](https://github.com/3A932045)
- 查看會員資料 Route::get('customers',[UserController::class,'index'])->name('customers.index'); [3A932117 黃佳怡](https://github.com/3A932117)

★ 各項功能完善 & 身分驗證 [3A932045 曾翊晴](https://github.com/3A932045)

## ERD
<a href="https://imgur.com/5Ig4PwO"/><img src="https://imgur.com/5Ig4PwO.png" title="source: imgur.com" /></a>

## 關聯式綱要圖
<a href="https://imgur.com/mDxdy5E"/><img src="https://imgur.com/mDxdy5E.png" title="source: imgur.com" /></a>

## 實際資料表欄位設計
- user 會員 <a href="https://imgur.com/cx4klgc"/><img src="https://imgur.com/cx4klgc.png" title="source: imgur.com" /></a>
- classes 課程 <a href="https://imgur.com/Wu67ijc"/><img src="https://imgur.com/Wu67ijc.png" title="source: imgur.com" /></a>
- reserves 預約訂單 <a href="https://imgur.com/cZY2w11"/><img src="https://imgur.com/cZY2w11.png" title="source: imgur.com" /></a>
- staffs 美甲老師  <a href="https://imgur.com/By0cxMq"/><img src="https://imgur.com/By0cxMq.png" title="source: imgur.com" /></a>
- schedules 排班表 <a href="https://imgur.com/xoHlbSR"/><img src="https://imgur.com/xoHlbSR.png" title="source: imgur.com" /></a>
- images 圖片路徑 <a href="https://imgur.com/DR4k8uz"/><img src="https://imgur.com/DR4k8uz.png" title="source: imgur.com" /></a>

## 初始專案與DB負責的同學 
- 初始專案 [3A932003 徐千素](https://github.com/3a932003)
- DB [3A932045 曾翊晴](https://github.com/3A932045)

## 額外使用的套件或樣板
★ 前台樣板 https://startbootstrap.com/theme/freelancer

作為前台頁面使用，介面清楚明瞭，方便操作

★ 後台樣板 https://startbootstrap.com/template/sb-admin

作為後台管理使用，介面清楚明瞭，方便操作

## 系統測試資料存放位置
- final01底下的sql資料夾

## 系統使用者測試帳號
- 前台
  - 帳號: user1@gmail.com
  - 密碼: 12345678

- 後台
  - 帳號: root@gmail.com
  - 密碼: 12345678

## 系統復原步驟
 1. 複製 git@github.com:WISD-2022/final01.git (或是[https://github.com/WISD-2022/final01.git](https://github.com/WISD-2022/final01.git))
    
    打開 cmder，進入www，輸入git clone git@github.com:WISD-2022/final01.git 切換至專案所在資料夾->cd final01
2. cmder輸入以下命令，復原專案
   - composer install
   - composer run-script post-root-package-install
   - composer run-script post-create-project-cmd (.evn 產生金鑰 APP_KEY=<自動產生>)
   - npm install
   - npm run build
3. 修改.env檔案
   - DB_CONNECTION=mysql
   - DB_HOST=127.0.0.1
   - DB_PORT=33060
   - DB_DATABASE=final01
   - DB_USERNAME=root
   - DB_PASSWORD=root
4. 復原DB/建立資料庫
   - artisan migrate
   
   因建置問題，需先將schedules、reserves的migration拉出，再artisan第二次

## 系統開發人員與工作分配
- [3A932003 徐千素](https://github.com/3a932003)
  - 會員新增、刪除、顯示預約功能
  - 前台課程、老師資訊顯示功能
  - 期中報告製作
  - 前台模板編輯
  

- [3A932045 曾翊晴](https://github.com/3A932045)
  - 美甲師上傳圖檔功能
  - 課程新增、刪除、修改、顯示功能
  - DB製作
  - 建置Controller、Model、Migration
  - 登入後判斷身分別進入前台或後台
  - 期中報告製作


- [3A932117 黃佳怡](https://github.com/3A932117)
  - 美甲師新增、刪除、修改、顯示功能
  - 排班表新增、刪除、修改、顯示功能
  - readme 撰寫
  - 期中報告製作
  - 後台模板編輯
