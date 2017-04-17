@extends('layouts.desktop')
@push('css')
{{ html()->style('/css/knowledge.css') }}
@endpush
@push('js')
{{--{{ html()->script('/js/contact.js') }}--}}
@endpush
@section('content')
    <div class="d-flex head-title text-center">
        <div class="col-sm-12 px-0">
            <img src="/images/knowledge/bg_header.png" alt="background header">
            <div class="overlay"></div>
        </div>
        <div class="body col-sm-12">
            <div class="d-flex align-items-center h-100">
                <h3 class="col-sm-12">Nhân tướng ứng dụng - Hiểu mình biết người</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row main-content">
            <div class="col-sm-12 mb-5">
                <i>Nhiều năm trước, trong quá trình tham vấn cho các doanh nghiệp, chúng tôi - một nhóm những nhà tư vấn
                    chiến lược, nhân sự (và cả thầy bói) - nhận ra rằng: Cốt tuỷ của một doanh nghiệp không nằm ở sản
                    phẩm, thương hiệu, hay những giá trị cao xa nào, mà nằm ở chính những nhân sự tạo nên doanh nghiệp
                    đó. Nhân sự phải được tuyển chọn và sắp xếp, sao cho "đúng người - đúng việc - đúng thời điểm".</i>
            </div>
            <div class="col-sm-12 text-center photo">
                <figure>
                    <img class="max-w-100" src="/images/knowledge/image_1.png" alt="image">
                    <figcaption>Hình ảnh bàn luận về phương pháp</figcaption>
                </figure>
            </div>
            <div class="col-sm-12">
                <p>
                    Nhu cầu đánh giá nhân sự vì thế càng trở nên xác đáng hơn bao giờ hết. Trên thực tế, doanh nghiệp
                    mới
                    chỉ khảo sát được năng lực nghiệp vụ (thông qua CV, portfolio, kiểm tra chuyên môn...) nhưng thường
                    bị
                    động trong việc khảo sát tâm lý nhân sự (phụ thuộc nhiều vào các bài test tâm lý nước ngoài, hoặc
                    cảm
                    nhận chủ quan của nhà quản trị). Những công cụ này thường gặp rất nhiều vấn đề: không phù hợp với
                    con
                    người bản địa, dễ bị "lách" bởi ứng viên có kinh nghiệm, mất thời gian cho nhân sự làm bài test, bị
                    định
                    kiến cá nhân làm cho sai lệch...
                </p>

                <p>
                    Dưới áp lực đòi hỏi phải có một công cụ thay thế hữu hiệu hơn, chúng tôi đã thống nhất lựa chọn Nhân
                    tướng học, bộ môn cổ học tinh hoa phương Đông được cổ nhân tin dùng trong việc chọn lựa hiền tài từ
                    hàng
                    ngàn năm. Sau một thời gian nghiên cứu - ứng dụng, nhiều doanh nghiệp đã phản hồi rất tích cực về
                    hiệu
                    quả của Nhân tướng học.
                </p>
                <p>
                    Cùng từ đó, với mong muốn phổ cập bộ công cụ này, hỗ trợ các tổ chức thực hiện hiệu quả hơn công tác
                    quản trị nhân sự, chúng tôi quyết định đưa bộ môn này vào giảng dạy và đào tạo tại các doanh nghiệp
                    và
                    trường đại học.
                </p>
                <p>
                    Trong quá trình này, nhiều vấn đề tiếp tục nảy sinh: học viên không bám lớp đầy đủ (do bận việc, đi
                    lại
                    khó khăn, mưa bão...), quá khó để tự học thêm ngoài giờ lên lớp (các sách vở truyền thống quá khô
                    khan,
                    thậm chí có sự sai lệch về kiến thức), không biết hỏi ai khi có thắc mắc... Bên cạnh đó, do lịch làm
                    việc tương đối dày, bản thân chúng tôi cũng gặp nhiều khó khăn trong việc bảo đảm chất lượng và tiến
                    trình học.
                </p>
                <p>
                    Từ đây, ý tưởng về việc xây dựng một ứng dụng di động Tự học Nhân tướng ra đời. Chúng tôi đặt tên
                    cho
                    sản phẩm này là S.E.E, viết tắt của Soul - Eye- Ear. Nghĩa là Tâm - Mắt - Tai, ba điểm trọng yếu cốt
                    lõi
                    đối với việc ứng dụng Nhân tướng. Chúng tôi tin rằng: phần mềm không chỉ giúp học viên giải quyết
                    các
                    vấn đề gặp phải, mà còn đưa Nhân tướng học phổ biến rộng rãi hơn nữa, trong cộng đồng người làm Nhân
                    sự
                    nói riêng, và những người có nhu cầu ứng dụng Nhân tướng học nói chung.
                </p>
            </div>
        </div>

        <div class="app-benefits row">
            <div class="col-sm item">
                <div class="image">
                    <img src="/images/knowledge/benefit_1.png" alt="">
                </div>
                <h6 class="title">Kiến thức cô đọng.</h6>
                <div class="content">
                    <p>Kiến thức tinh lọc,
                        có căn bản.
                        Hướng tiếp
                        cận khoa học.
                    </p>
                </div>
            </div>

            <div class="col-sm item">
                <div class="image">
                    <img src="/images/knowledge/benefit_2.png" alt="">
                </div>
                <h6 class="title">Ứng dụng thực tiễn.</h6>
                <div class="content">
                    <p>
                        Nhiều bài tập, câu hỏi
                        giúp bạn rèn luyện
                        khả năng "thực chiến".
                        Nội dung học tập trung,
                        phục vụ lĩnh vực
                        Quản trị Nhân sự.
                    </p>
                </div>
            </div>

            <div class="col-sm item">
                <div class="image">
                    <img src="/images/knowledge/benefit_3.png" alt="">
                </div>
                <h6 class="title">Lối học hấp dẫn, dễ hiểu.</h6>
                <div class="content">
                    <p>
                        Bài học chia nhỏ,
                        luôn đi kèm ví dụ minh hoạ.
                        Trình bày trực quan, sinh động.
                        Nội dung được game hoá,
                        tạo hứng thú trong khi học.
                    </p>
                </div>
            </div>

            <div class="col-sm item">
                <div class="image">
                    <img src="/images/knowledge/benefit_4.png" alt="">
                </div>
                <h6 class="title">Giải pháp học di động.</h6>
                <div class="content">
                    <p>
                        Học bất kỳ khi nào bạn muốn,
                        tại bất cứ đâu,
                        trong bao lâu tuỳ thích.
                        Tiến trình học luôn được lưu
                        trực tuyến bạn có thể học
                        trên nhiều thiết bị khác nhau.
                    </p>
                </div>
            </div>

            <div class="col-sm item">
                <div class="image">
                    <img src="/images/knowledge/benefit_5.png" alt="">
                </div>
                <h6 class="title">Cộng đồng tích cực.</h6>
                <div class="content">
                    <p>
                        Bạn hỏi, chuyên gia trả lời.
                        Cùng trao đổi, bàn luận với
                        những thành viên khác.
                        Kết nối từ online tới đời thực.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
<script>
    document.getElementById('navbar').className += ' always bg-navbar';
</script>
@endpush
