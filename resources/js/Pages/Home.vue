<template>
  <app-playout title="Home">
    <div class="pt-6 px-72">
      <div class="p-6 text-center">
        <h1 class="text-4xl font-semibold text-blue-700">VỀ CHÚNG TÔI</h1>
        <p class="mb-16 mt-6 text-lg">
          Wetech sẽ tập trung phát triển công nghệ theo hướng IOT. Trong đó sẽ
          tập trung đẩy mạnh thi công lắp đặt thiết bị công nghệ, thiết bị gia
          dụng hiện đại.
        </p>
        <div class="grid grid-cols-3 justify-items-stretch gap-5">
          <!--Tầm nhìn class="h-70 rounded-2xl shadow group cursor-pointer"-->
          <div>
            <div class="relative group cursor-pointer flex justify-center">
              <img
                src="./image/tamnhin.png"
                alt="icon"
                class="
                  h-20
                  w-20
                  group-hover:transform group-hover:scale-50
                  transition-all
                  duration-700
                "
              />
            </div>
            <div class="justify-center pb-2 text-center leading-none">
              <h1
                class="
                  mt-16
                  text-2xl
                  font-bold
                  text-blue-700
                  hover:text-blue-400
                "
              >
                TẦM NHÌN
              </h1>
            </div>
            <p class="mt-3 text-lg">
              Sự đô thị hóa và khủng hoảng an ninh môi trường gây ra sự rối loạn
              trong cân đối dinh dưỡng và tinh thần.
            </p>
          </div>
          <div>
            <div class="relative group cursor-pointer flex justify-center">
              <img
                src="./image/sumenh.png"
                alt="icon"
                class="
                  h-20
                  w-22
                  group-hover:transform group-hover:scale-50
                  transition-all
                  duration-700
                "
              />
            </div>
            <div class="justify-center pb-2 text-center leading-none">
              <h1
                class="
                  mt-16
                  text-2xl
                  font-bold
                  text-blue-700
                  hover:text-blue-400
                "
              >
                SỨ MỆNH
              </h1>
              <p class="mt-4 text-lg">
                Cải thiện lối sống và hiệu quả năng suất lao động thân thiện và
                hòa hợp với tự nhiên.
              </p>
            </div>
          </div>
          <div>
            <div class="relative group cursor-pointer flex justify-center">
              <img
                src="./image/giatricotloi.png"
                alt="icon"
                class="
                  h-20
                  w-20
                  group-hover:transform group-hover:scale-50
                  transition-all
                  duration-700
                "
              />
            </div>
            <div class="justify-center pb-2 text-center leading-none">
              <h1
                class="
                  mt-16
                  text-2xl
                  font-bold
                  text-blue-700
                  hover:text-blue-400
                "
              >
                CỐT LÕI
              </h1>
              <p class="mt-4 text-lg">
                Hệ thống thư viện công nghệ và văn hóa doanh nghiệp nhiệt tình,
                thật thà, chuyên nghiệp.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="overflow-hidden">
      <div
        class="bg-local md:bg-fixed bg-opacity-10 h-80 relative group cursor-pointer"
        style="background-image: url(./image/background.jpg)"
      >
        <img src="./image/background.jpg" alt="backgroup"/>
        <div
          class="w-full h-full bg-gray-700 absolute top-0 left-0 bg-opacity-25"
        ></div>
        <p
          class="
            absolute
            top-1/3
            left-1/3
            text-2xl text-white
            font-medium
            text-center
          "
        >
          <span class="text-4xl font-bold pb-6">VĂN HÓA</span><br />
          6 chữ gói gọn văn hóa của chúng tôi<br />
          "Nhiệt tình - Thật thà - Chuyên nghiệp"
        </p>
      </div>
    </div>
  </app-playout>
</template>

<script>
</script>
