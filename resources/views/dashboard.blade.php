<x-app-layout>
    <div class="py-12">
      <div class="flex-col">
        <div class="bg-blue-800 max-w-7xl mx-auto sm:px-6 lg:px-8">
          
<div class="flex items-center justify-center p-12">

  <div class="mx-auto w-full max-w-[550px]">
    <form action="" method="POST">
      <div class="mb-5">
        <label
          for="name"
          class="mb-3 block text-base font-medium text-[#07074D]"
        >
          Full Name
        </label>
        <input
          type="text"
          name="name"
          id="name"
          placeholder="Full Name"
          class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        />
      </div>
      <div class="mb-5">
        <label
          for="email"
          class="mb-3 block text-base font-medium text-[#07074D]"
        >
          Email Address
        </label>
        <input
          type="email"
          name="email"
          id="email"
          placeholder="example@domain.com"
          class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        />
      </div>
      <div class="mb-5">
        <label
          for="email"
          class="mb-3 block text-base font-medium text-[#07074D]"
        >
          Subject
        </label>
        <input
          type="text"
          name="email"
          id="email"
          placeholder="Enter your email"
          class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        />
      </div>
      <div class="mb-5">
        <label
          for="address"
          class="mb-3 block text-base font-medium text-[#07074D]"
        >
          Message
        </label>
        <textarea
          rows="2"
          name="address"
          id="adress"
          placeholder="Type your address"
          class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        ></textarea>
      </div>
      <div class="mb-5">
                                <label for="image" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Upload Image
                                </label>
                                <input type="file" name="image" id="image"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-2 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
      <div class="py-10">
        <button
          class="bg-[#3FA2F6] hover:bg-red-800 rounded-md py-3 px-8 text-base font-semibold text-black focus:outline-none"
        >
          Submit
        </button>
      </div>
    </form>
  </div>
</div>
        </div>
    </div>
    </div>
</x-app-layout>
