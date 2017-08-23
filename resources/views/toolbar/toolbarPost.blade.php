<div class="footer-toolbar toolbarPost">
    <div class="dis-table width-100">
        <div class="table-cell cell1">
            <div class="dis-table width-100">
                <div class="table-cell">
                    <h3 class="text-center"><a href="tel:0868608106"><i class="bg bg1"></i></a></h3>
                </div>
                <div class="table-cell">
                    <h4 class="text-center"><a href="tel:0868608106">Điện thoại tư vấn</a></h4>
                </div>
            </div>
        </div>
        <div class="table-cell cell2">
            <div class="dis-table width-100">
                <div class="table-cell">
                    <h3 class="text-center"><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en"><i class="bg bg2"></i></a></h3>
                </div>
                <div class="table-cell">
                    <h4 class="text-center"><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">Tư vấn trực tuyến</a></h4>
                </div>
            </div>
        </div>
        <div class="table-cell cell1">
            <div class="dis-table width-100">
                <div class="table-cell">
                    <h3 class="text-center"><a href="#top"><i class="bg bg3"></i></a></h3>
                </div>
                <div class="table-cell">
                    @if(isset($term))
                    <h4 class="text-center"><a href="{{ APITerm::getUrlByObj($term) }}">Quay lại</a></h4>
                    @else
                    <h4 class="text-center"><a href="{{ url('/') }}">Quay lại</a></h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>