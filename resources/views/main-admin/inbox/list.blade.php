<div class="relative overflow-x-auto shadow-md rounded-lg mt-4 mx-4 pb-4">
    <table class="w-full text-sm text-left rtl:text-right text-gray-600  dark:text-gray-200 my-4">
        @php
            $dump =
                'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet, veritatis exercitationem. Debitis, amet, in ab quisquam molestias facere repudiandae necessitatibus id ipsa natus distinctio, porro molestiae libero. Excepturi ex deleniti itaque exercitationem ut rerum ullam incidunt accusamus voluptatum minus, repellendus quod laudantium, non molestias nostrum. Non molestias cumque labore velit eius reprehenderit placeat temporibus accusamus laborum unde? Accusamus neque praesentium nihil! Magni facere molestias earum deleniti a ipsa amet reprehenderit tempore quasi, voluptas in qui enim culpa saepe sed est sapiente alias voluptatum! Nemo doloribus iusto numquam ab fugiat, deleniti et enim quam natus totam quod atque fugit delectus. Tempora.';
        @endphp
        <tbody>
            @for ($i = 0; $i < 10; $i++)
                <a href="">
                    <tr class=" border-b border-primary-400 lg:block flex flex-col hover:shadow-lg py-2">
                        <th scope="row"
                            class="px-6 py-2 font-bold  fonwhitespace-nowrap text-gray-900 
                        hover:text-primary-700 dark:text-white min-w-80">
                            {{ Str::limit($dump, 30, '...') }}
                        </th>
                        <td class="px-6 lg:font-normal font-mono min-w-48">
                            30 Desember 2025
                        </td>
                        <td class="px-6">
                            {{ Str::limit($dump, 150, '...') }}
                        </td>
                    </tr>
                </a>
            @endfor
        </tbody>

    </table>
    <x-ui.pagination />
</div>
