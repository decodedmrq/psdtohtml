<!-- Features -->
<section class="features container-part row" name="content">
    <!-- Features title -->
    <div class="part-index col-sm-12">
        <div class="text-center">
            <div class="number d-inline-block">02</div>
            <h3 class="title d-inline-block">
                {!! make_break_line('Tính năng sản phẩm', 2, 'div', 'd-block title-part') !!}
            </h3>
        </div>
    </div>

    <!-- Features body -->
    <div class="part-body col-sm-12">
        <div class="row">
        @include('home.feature.slider')

        <!-- Feature list -->
            <ul class="feature-list col-sm-7">
                <!-- Feature item -->
                <li class="feature-item active" data-index="0">
                    <h4 class="title">1. Danh sách khóa học </h4>
                    <p class="content">
                        Nhiều khóa học thú vị phục vụ cho công tác quản trị bao gồm: Nhân tướng
                        học, Tâm lý học, Kỹ năng quan sát, Quản trị nhân sự.
                    </p>
                </li>
                <!-- Feature item -->
                <li class="feature-item" data-index="1">
                    <h4 class="title">2. Cộng đồng </h4>
                    <p class="content">
                        Nơi giao lưu, trao đổi, hỏi đáp với bạn học và các chuyên gia trong lĩnh vực
                        Nhân tướng học và Quản trị nhân sự.
                    </p>
                </li>
                <!-- Feature item -->
                <li class="feature-item" data-index="2">
                    <h4 class="title">3. Kho bí kíp </h4>
                    <p class="content">
                        Ngoài những bài học chính, ứng dụng còn cung cấp một kho bí kíp những kiến
                        thức bổ trợ hay và độc đáo.
                    </p>
                </li>
                <!-- Feature item -->
                <li class="feature-item" data-index="3">
                    <h4 class="title">4. Thẻ ghi nhớ </h4>
                    <p class="content">
                        Giúp người học lưu trữ lại các kiến thức quan trọng để ôn lại bất cứ lúc
                        nào.
                    </p>
                </li>

            </ul>

        </div>
    </div>

    <div class="bottom-line"></div>
    <div class="bottom-line-circle right"></div>
</section>
