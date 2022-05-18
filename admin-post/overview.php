<div class="container w-50">
    <h4 class="text-center">Danh sách bài đăng</h4>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Số thứ tự</th>
                <th scope="col">Tiêu đề</th>
                <th scope="col">Thời gian</th>
                <th scope="col">Trạng thái</th>
                <th scope="col"></th>
                <th scope="col">Chọn</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">
                    <p>1</p>
                </th>
                <td>Lợi ích của việc học</td>
                <td>
                    <snap id="date"></snap>
                </td>
                <td>@mdo</td>
                <td><a href="#">Chi tiết</a></td>
                <td class="text-center">
                    <input class="form-check-input" type="checkbox" value="" id="checkboxPost">
                </td>
            </tr>
        </tbody>
        <script>
            // demo thu code thoi 
            $(document).ready(function() {
                let today = new Date();
                $('td snap').text(today.getDate() + '-' + (today.getMonth() + 1) + '-' + today.getFullYear());
            })
        </script>
    </table>
</div>