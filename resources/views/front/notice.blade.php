@extends('layouts.template2')

@section('title', 'TINGS Notice')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/notice.css') }}">
@endsection

@section('main')
    <div id="notice" class="notice">
        <div class="row">
            <div class="col30">
                <span>購物須知</span>
                <div class="english">Notice</div>
            </div>
            <div class="col70">
                <div class="img"></div>
            </div>
        </div>
        <div class="summary">
            <span>本站交易分為三部分：</span>
            <div class="bullet-points">
                <span>1. 課程 </span>
                <span>2. 商品 </span>
                <span>3. 材料</span>
            </div>
            <span>相關交易說明各依不同屬性說明。</span>
            <span>下單前，請確認結帳內容數量及金額。</span>
            <span>訂購前請登入會員，以便獲得會員折扣。</span>
        </div>
        <div class="products">
            <div class="title">1. 商品 / 材料類</div>
            <div class="content">
                <span class="description">訂單送出後，請稍待確認信函聯繫，最終結帳內容及金額以確認信息為準，待確認訂單內容及運費後，個別依付款方式結帳，匯款經確認無誤三日內寄發出貨 (國定假日及週一不寄送)。
                    商品/材料類交易，一經售出概不退換。</span>
                <span>臺灣運費：一般商品 / 材料以超商交貨便方式出貨，5 公斤以下，長寬高小於 105 公分，酌收運費 60 元。</span>
                <span>國際運費：以郵局 EMS / 順豐快遞包裹實際報價。</span>
            </div>
        </div>
        <div class="online-courses">
            <div class="title">2. 線上課程類</div>
            <div class="content">
                <span>訂單送出並完成結帳後，即可開通課程閱覽權限。</span>
                <span>線上課程類交易，一經結帳完成並開通課程閱覽權限後概不退換。</span>
                <span>課程需登入會員後始能觀看。</span>
                <span>課程觀看時限，以個別課程標示為準。</span>
            </div>
        </div>
        <div class="in-class-courses">
            <div class="title">3. 實體課程類</div>
            <div class="content">
                <span>訂單送出後，須透過粉絲頁聯繫預約上課日期、課程須知及付款方式。</span>
                <span>實體課程由於材料教材需提前預備，於開課三日前既不接受退費。</span>
            </div>
        </div>
        <div class="payment">
            <div class="title">4. 結帳方式</div>
            <div class="content">
                <span>匯款：永豐銀行營業部分 (銀行代號807)</span>
                <span>帳戶：16801800497513</span>
                <span>戶名：黃愉婷</span>
                <span>信用卡：使用線上金流系統結帳 (海外刷卡手續費4%)。</span>
                <span class="additional-info">商品 / 材料類及實體課程為避免金額計算有誤，務必待聯繫確認後才付款。</span>
            </div>
        </div>
        <div class="overseas">
            <div class="title">5. 海外顧客購買方式</div>
            <div class="content">
                <span>非台灣境內顧客請聯絡客服下單。</span>
                <span>所有商品價格須加 4% 海外刷卡手續費。</span>
                <span>商品一經售出概不退換。</span>
            </div>
        </div>
    </div>
@endsection

@section('js')
    
@endsection