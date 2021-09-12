<template>
<app-layout title="Topic">
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                            <h2 class="p-8 text-2xl text-center font-bold">
                                PHÂN LOẠI HÀNG HÓA THEO TỪNG KHU VỰC BẰNG MÃ QR THÔNG QUA CÔNG NGHỆ XỬ LÝ HÌNH ẢNH
                            </h2>
                            <p class="mt-4 font-bold text-gray-900">
                                Người thực hiện: ???
                            </p>
                            <p class="mt-2"> 
                                <span class="font-bold text-gray-900">
                                    Lĩnh vực nghiên cứu:
                                </span> 
                                Khoa học kỹ thuật và công nghệ.
                            </p>
                            <p class="mt-4">
                                <span class="font-bold text-gray-900">
                                    Thời gian thực hiện:
                                </span> 
                                7 tháng (từ ngày 01 tháng 09 năm 2021 đến ngày 01 tháng 04 năm 2022).
                            </p>
                            <p class="mt-4">
                                <span class="font-bold text-gray-900">
                                    Tính cấp thiết của đề tài:
                                </span>
                                <ul class="mt-2">
                                    <li>
                                        Trong thời đại chuyển đổi số, việc vận chuyển hàng hóa thông qua các đơn vị vận chuyển (giao hàng nhanh, viettel post,…) càng ngày càng nhanh chóng và tiện lợi. Song với việc hàng hóa được đưa về khu vực trung chuyển nhiều thì việc phân loại hàng theo khu vực còn rất nhiều hạn chế như tốn thời gian phân loại, tốn nhiều nhân công để phân loại hàng
                                    </li>
                                    <li>
                                        Với mong muốn mang lại hiệu suất làm việc cao hơn, tiết kiệm thời gian và nhân công nên Wetech mong muốn cung cấp hệ thống phân loại hàng bằng mã QR để khắc phục những hạn chế trên.
                                    </li>
                                </ul>
                            </p>
                            <p class="mt-4">
                                <span class="font-bold text-gray-900">
                                    Mục tiêu:
                                </span>
                                <ul class="mt-2">
                                    <li>
                                        Trong tháng 6 năm 2022 Wetech sẽ cung cấp hệ thống phân loại hàng hóa theo khu vực bằng mã QR thông qua xử lý hình ảnh cho các đơn vị vận chuyển trong khu vực.
                                    </li>
                                    <li>
                                        Hệ thống phân loại hàng hóa theo từng khu vực bằng mã QR thông qua công nghệ xử lý hình ảnh giúp việc phân loại thuận tiện mang lại hiệu quả cao. Với mong muốn mang lại sự tiện lợi, đơn giản các thao tác điều khiển, dễ tiến hành bảo trì, bảo dưỡng.
                                    </li>
                                </ul>
                            </p>
                            <p class="mt-4">
                                <span class="font-bold text-gray-900">
                                    Nguyên lí làm việc của hệ thống:
                                </span> 
                                khi hàng hóa được vận chuyển đến khu vực trung chuyển thì hàng hóa được đặt lên băng tải (khi đặt hàng hóa trên băng tải hướng mặt có mã QR lên trên) với kích thước 60x150cm (dựa quy định chung về đóng gói hàng hóa, hàng hóa có kích thước tối đa mỗi chiều không quá 50cm). Cách đầu băng tải 30cm sẽ có một camera có ống kính hướng xuống mặt băng tải, cách mặt băng tải 60cm để chụp hình ảnh mã QR, sau đó hình ảnh có chứa mã QR được xử lý và phân loại khu vực. Sau khi hàng hóa đã được phân loại khu vực và di chuyển hết chiều dài băng tải hàng sẽ lên băng tải đa hướng, sau khi hàng hóa trên băng tải đa hướng sẽ được di chuyển đến các băng tải con lăn theo khu vực đã được lập trình sẵn, hàng hóa sẽ di chuyển theo băng tải con lăn đến các giỏ hàng theo khu vực.
                            </p>
                            <p class="mt-4">
                                <span class="font-bold text-gray-900">
                                    Đối tượng, phạm vi nghiên cứu:
                                </span>
                                <ul class="mt-2 pl-7 list-disc">
                                    <li>Khu vực trung chuyển của các đơn vị vận chuyển.</li>
                                    <li>Bộ điều khiển lập trình PLC S7-1200.</li>
                                    <li>Công nghệ xử lý hình ảnh và xử lý dữ liệu.</li>
                                    <li>Các loại băng tải: băng tải dây đai PVC, băng tải con lăn, băng tải đa hướng.</li>
                                </ul>
                            </p>
                            <p class="mt-4">
                                <span class="font-bold text-gray-900">Phương pháp nghiên cứu:</span>
                                <ul class="mt-2 pl-7 list-disc">
                                    <li>Khảo sát thực tế tại các khu vực trung chuyển.</li>
                                    <li>Tìm kiếm, tra cứu thông tin về các vấn đề liên quan như: PLC, băng tải…</li>
                                    <li>Lập trình các chương trình rời rạc cho từng thiết bị.</li>
                                    <li>Tổng hợp các chương trình con thành chương trình chính của toàn hệ thống.</li>
                                    <li>Tiến hành thực hiện hệ thống demo, kiểm tra, điều chỉnh thông số.</li>
                                    <li>Thiết kế khung cơ khí, tủ điều khiển cho hệ thống.</li>
                                    <li>Lắp đặt toàn bộ thiết bị vào khung,vận hành, hiệu chỉnh chương trình. Kiểm tra khắc phục lỗi, đưa vào hoạt động.</li>
                                </ul>
                            </p>
                            <p class="mt-4">
                                <span class="font-bold">Nội dung nghiên cứu</span>
                                <ul class="mt-2 pl-7 list-disc">
                                    <li>
                                        <span class="font-bold">Nội dung 1:</span> 
                                        Xử lý hình ảnh bằng thư viện OpenCV với python. Xử lý các hình ảnh đơn giản sau đó xử lý và nhận diện hình ảnh có chứa mã QR. Xử lý dữ liệu và chia dữ liệu theo khu vực
                                    </li>
                                    <li>
                                        <span class="font-bold">Nội dung 2:</span> 
                                        Lập trình PLC S7-1200 để điều khiển băng tải (băng tải dây đai PVC, băng tải đa hướng, băng tải con lăn) và phân loại theo khu vực. Thông qua cách lập trình con điều khiển độc lập các băng tải, sau đó ghép các chương trình thành chương trình điều khiển hệ thống hoàn chỉnh.
                                    </li>
                                    <li>
                                        <span class="font-bold">Nội dung 3:</span> 
                                        Tiến hành thiết kế hệ thống demo với kích thước 120x120cm. Chạy thử nghiệm, kiểm tra độ ổn định của hệ thống, khắc phục điều chỉnh sai số hệ thống.
                                    </li>
                                    <li>
                                        <span class="font-bold">Nội dung 4:</span> 
                                        Thiết kế khung cơ khí cho hệ thống, lắp đặt các động cơ, băng tải, camera, màn hình hiển thị…và căn chỉnh phù hợp điều kiện môi trường.
                                    </li>
                                    <li>
                                        <span class="font-bold">Nội dung 5:</span> 
                                        Thiết kế, lắp đặt tủ điều khiển cho hệ thống bao gồm các nút điều khiển và 3 nút cơ bản start, stop, khẩn cấp.
                                    </li>
                                    <li>
                                        <span class="font-bold">Nội dung 6:</span> 
                                        Hiệu chỉnh phần mềm, vận hành, kiểm tra và đưa vào hoạt động.
                                    </li>
                                </ul>
                            </p>

                            <p class="mt-4 font-bold text-gray-900">
                                Tiến độ thực hiện
                            </p>
                            <table class="mt-2 table-auto border-collapse border border-black">
                                    <thead class="text-center font-bold">
                                        <tr>
                                            <th class="border border-black">STT</th>
                                            <th class="border border-black">Nội dung</th>
                                            <th class="border border-black">Sản phẩm</th>
                                            <th class="border border-black">Thời gian thực hiện</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-justify">
                                        <tr>
                                            <td class="text-center border border-black">1</td>
                                            <td class="border border-black">
                                                Nội dung 1: Xử lý hình ảnh bằng thư viện OpenCV với python. Xử lý các hình ảnh đơn giản sau đó xử lý và nhận diện hình ảnh có chứa mã QR. Xử lý dữ liệu và chia dữ liệu theo khu vực.
                                            </td>
                                            <td class="border border-black">
                                                Xử lý các hình ảnh chụp và thu thập trên mạng. Nhận diện được hình ảnh có chứa mã vạch. Xử lý dữ liệu từ các hình ảnh có chứa mã vạch và chia theo khu vực.
                                            </td>
                                            <td class="border border-black">
                                                4 tuần (Từ ngày 01/09 đến ngày 01/10)
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center border border-black">2</td>
                                            <td class="border border-black">
                                                Nội dung 2: Lập trình PLC S7-1200 để điều khiển băng tải (băng tải dây đai PVC, băng tải đa hướng, băng tải con lăn) và phân loại theo khu vực. Thông qua cách lập trình con điều khiển độc lập các băng tải, sau đó ghép các chương trình thành chương trình điều khiển hệ thống hoàn chỉnh.điều khiển hệ thống hoàn chỉnh.
                                            </td>
                                            <td class="border border-black">
                                                Hoàn thiện chương trình hoàn chỉnh cho toàn hệ thống, kiểm tra độ ổn định của băng tải.
                                            </td>
                                            <td class="border border-black">
                                                4 tuần (Từ ngày 02/10 đến ngày 01/11)
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center border border-black">3</td>
                                            <td class="border border-black">
                                                Nội dung 3: Tiến hành thiết kế hệ thống demo với kích thước 120x120cm. Chạy thử nghiệm, kiểm tra độ ổn định của hệ thống, khắc phục điều chỉnh sai số hệ thống.
                                            </td>
                                            <td class="border border-black">
                                                Hoàn thiện hệ thống demo, kiểm tra độ ổn định hệ thống, khắc phục sai số hệ thống.
                                            </td>
                                            <td class="border border-black">
                                                5 tuần (Từ ngày 07/11 đến ngày 15/12)
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center border border-black">4</td>
                                            <td class="border border-black">
                                                Nội dung 4: Thiết kế khung cơ khí cho hệ thống, lắp đặt các động cơ, băng tải, camera, màn hình hiển thị…và căn chỉnh phù hợp điều kiện môi trường.
                                            </td>
                                            <td class="border border-black">
                                                Hoàn thiện hệ thống thô
                                            </td>
                                            <td class="border border-black">
                                                4 tuần (Từ ngày 20/12 đến ngày 20/01)
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center border border-black">5</td>
                                            <td class="border border-black">
                                                Nội dung 5:Thiết kế, lắp đặt tủ điều khiển cho hệ thống bao gồm các nút điều khiển và 3 nút cơ bản start, stop, khẩn cấp.
                                            </td>
                                            <td class="border border-black">
                                                Hoàn thiện tủ điện
                                            </td>
                                            <td class="border border-black">
                                                4 tuần (Từ ngày 21/01 đến ngày 21/02)
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center border border-black">6</td>
                                            <td class="border border-black">
                                                Nội dung 6: Hiệu chỉnh phần mềm, vận hành, kiểm tra và đưa vào hoạt động.
                                            </td>
                                            <td class="border border-black">
                                                Hoàn thiện hệ thống hoàn chỉnh, vận hành và kiểm tra
                                            </td>
                                            <td class="border border-black">
                                                4 tuần (Từ ngày 22/02 đến ngày 22/03)
                                            </td>
                                        </tr>
                                    </tbody>
                            </table>
                            
                    </div>
                </div>
            </div>
        </div>
</div>
</app-layout>
</template>

<script>
    
</script>
