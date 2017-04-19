<!-- Story -->
<div class="story col-sm-12">
    <div class="story-head row text-center">
        <div class="title col-sm-12">{{ trans('string.story.title') }}</div>
        <small class="description col-sm-12">{{ trans('string.story.description') }}</small>
    </div>

    <div class="story-body row">
        <!-- Left -->
        <div class="col-sm">
            <div class="d-flex align-items-center">
                <div>
                    <div class="content">{{ $story->section_1 }}</div>
                    <div class="content toggle-story">
                        <p>
                            Nhu cầu đánh giá nhân sự vì thế càng trở nên xác đáng hơn bao giờ hết. Trên thực tế, doanh
                            nghiệp mới chỉ khảo sát được năng lực nghiệp vụ (thông qua CV, portfolio, kiểm tra chuyên
                            môn...) nhưng thường bị động trong việc khảo sát tâm lý nhân sự (phụ thuộc nhiều vào các bài
                            test tâm lý nước ngoài, hoặc cảm nhận chủ quan của nhà quản trị). Những công cụ này thường
                            gặp rất nhiều vấn đề: không phù hợp với con người bản địa, dễ bị "lách" bởi ứng viên có kinh
                            nghiệm, mất thời gian cho nhân sự làm bài test, bị định kiến cá nhân làm cho sai lệch...
                        </p>
                        <p>
                            Dưới áp lực đòi hỏi phải có một công cụ thay thế hữu hiệu hơn, chúng tôi đã thống nhất lựa
                            chọn Nhân tướng học, bộ môn cổ học tinh hoa phương Đông được cổ nhân tin dùng trong việc
                            chọn lựa hiền tài từ hàng ngàn năm. Sau một thời gian nghiên cứu - ứng dụng, nhiều doanh
                            nghiệp đã phản hồi rất tích cực về hiệu quả của Nhân tướng học.
                        </p>
                        <p>
                            Cùng từ đó, với mong muốn phổ cập bộ công cụ này, hỗ trợ các tổ chức thực hiện hiệu quả hơn
                            công tác quản trị nhân sự, chúng tôi quyết định đưa bộ môn này vào giảng dạy và đào tạo tại
                            các doanh nghiệp và trường đại học.
                        </p>
                        <p>
                            Trong quá trình này, nhiều vấn đề tiếp tục nảy sinh: học viên không bám lớp đầy đủ (do bận
                            việc, đi lại khó khăn, mưa bão...), quá khó để tự học thêm ngoài giờ lên lớp (các sách vở
                            truyền thống quá khô khan, thậm chí có sự sai lệch về kiến thức), không biết hỏi ai khi có
                            thắc mắc... Bên cạnh đó, do lịch làm việc tương đối dày, bản thân chúng tôi cũng gặp nhiều
                            khó khăn trong việc bảo đảm chất lượng và tiến trình học.
                        </p>
                        <p>
                            Từ đây, ý tưởng về việc xây dựng một ứng dụng di động Tự học Nhân tướng ra đời. Chúng tôi
                            đặt tên cho sản phẩm này là S.E.E, viết tắt của Soul - Eye- Ear. Nghĩa là Tâm - Mắt - Tai,
                            ba điểm trọng yếu cốt lõi đối với việc ứng dụng Nhân tướng. Chúng tôi tin rằng: phần mềm
                            không chỉ giúp học viên giải quyết các vấn đề gặp phải, mà còn đưa Nhân tướng học phổ biến
                            rộng rãi hơn nữa, trong cộng đồng người làm Nhân sự nói riêng, và những người có nhu cầu ứng
                            dụng Nhân tướng học nói chung.
                        </p>
                    </div>
                    <a class="btn-story-read-more btn" href="javascript:void(0)">
                        {{ trans('string.story.read_more') }}
                    </a>
                </div>
            </div>
        </div>
        <!-- /Left -->

        <!-- Right -->
        <div class="col-sm">
            <img src="{{ $story->image }}" alt="{{ trans('string.story.image') }}">
        </div>
        <!-- /Right -->
    </div>
</div>
<!-- /Story -->
