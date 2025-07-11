<header class="mb-4 lg:mb-6 not-format">
    <address class="flex items-center mb-6 not-italic">
        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
            <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                alt="Jese Leos">

            <div class="flex flex-col">
                <a href="">
                    <span
                        class="me-2 rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                        {{ Str::limit('Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.', 20, '..') }}</span>
                </a>
                <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">Jese
                    Leos</a>
                <div class="flex space-x-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 dark:text-gray-400"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <!-- Pointer Geo -->
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 21s7-6.167 7-11a7 7 0 1 0-14 0c0 4.833 7 11 7 11z" />
                        <!-- Titik di tengah -->
                        <circle cx="12" cy="10" r="2" fill="currentColor" />
                    </svg>
                    <p class="text-base text-gray-500 dark:text-gray-400">
                        <time pubdate datetime="2022-02-08" title="February 8th, 2022">Lokasi geografi tempat</time>
                    </p>
                </div>
                <div class="flex space-x-4"><svg xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 text-gray-500 dark:text-gray-400" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <!-- Icon Kalender -->
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <p class="text-base text-gray-500 dark:text-gray-400">
                        <time pubdate datetime="2022-02-08" title="February 8th, 2022">Feb. 8, 2022</time>
                    </p>
                </div>

            </div>
        </div>
    </address>
    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
        Best practices for successful prototypes</h1>
</header>

{{-- <div class="">
    <p class="lead">Flowbite is an open-source library of UI components built with the utility-first
        classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals,
        datepickers.</p>
    <p>Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way,
        you can think things through before committing to an actual design project.</p>
    <p>But then I found a <a href="https://flowbite.com">component library based on Tailwind CSS called
            Flowbite</a>. It comes with the most commonly used UI components, such as buttons, navigation
        bars, cards, form elements, and more which are conveniently built with the utility classes from
        Tailwind CSS.</p>
    <figure><img src="https://flowbite.s3.amazonaws.com/typography-plugin/typography-image-1.png" alt="">
        <figcaption>Digital art by Anonymous</figcaption>
    </figure>
    <h2>Getting started with Flowbite</h2>
    <p>First of all you need to understand how Flowbite works. This library is not another framework.
        Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the
        documentation.</p>
    <p>It also includes a JavaScript file that enables interactive components, such as modals, dropdowns,
        and datepickers which you can optionally include into your project via CDN or NPM.</p>
    <p>You can check out the <a href="https://flowbite.com/docs/getting-started/quickstart/">quickstart
            guide</a> to explore the elements by including the CDN files into your project. But if you want
        to build a project with Flowbite I recommend you to follow the build tools steps so that you can
        purge and minify the generated CSS.</p>
    <p>You'll also receive a lot of useful application UI, marketing UI, and e-commerce pages that can help
        you get started with your projects even faster. You can check out this <a
            href="https://flowbite.com/docs/components/tables/">comparison table</a> to better understand
        the differences between the open-source and pro version of Flowbite.</p>
    <h2>When does design come in handy?</h2>
    <p>While it might seem like extra work at a first glance, here are some key moments in which prototyping
        will come in handy:</p>
    <ol>
        <li><strong>Usability testing</strong>. Does your user know how to exit out of screens? Can they
            follow your intended user journey and buy something from the site you’ve designed? By running a
            usability test, you’ll be able to see how users will interact with your design once it’s live;
        </li>
        <li><strong>Involving stakeholders</strong>. Need to check if your GDPR consent boxes are displaying
            properly? Pass your prototype to your data protection team and they can test it for real;</li>
        <li><strong>Impressing a client</strong>. Prototypes can help explain or even sell your idea by
            providing your client with a hands-on experience;</li>
        <li><strong>Communicating your vision</strong>. By using an interactive medium to preview and test
            design elements, designers and developers can understand each other — and the project — better.
        </li>
    </ol>
    <h3>Laying the groundwork for best design</h3>
    <p>Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way,
        you can think things through before committing to an actual design project.</p>
    <p>Let's start by including the CSS file inside the <code>head</code> tag of your HTML.</p>
    <h3>Understanding typography</h3>
    <h4>Type properties</h4>
    <p>A typeface is a collection of letters. While each letter is unique, certain shapes are shared across
        letters. A typeface represents shared patterns across a collection of letters.</p>
    <h4>Baseline</h4>
    <p>A typeface is a collection of letters. While each letter is unique, certain shapes are shared across
        letters. A typeface represents shared patterns across a collection of letters.</p>
    <h4>Measurement from the baseline</h4>
    <p>A typeface is a collection of letters. While each letter is unique, certain shapes are shared across
        letters. A typeface represents shared patterns across a collection of letters.</p>
    <h3>Type classification</h3>
    <h4>Serif</h4>
    <p>A serif is a small shape or projection that appears at the beginning or end of a stroke on a letter.
        Typefaces with serifs are called serif typefaces. Serif fonts are classified as one of the
        following:</p>
    <h4>Old-Style serifs</h4>
    <ul>
        <li>Low contrast between thick and thin strokes</li>
        <li>Diagonal stress in the strokes</li>
        <li>Slanted serifs on lower-case ascenders</li>
    </ul><img src="https://flowbite.s3.amazonaws.com/typography-plugin/typography-image-2.png" alt="">
    <ol>
        <li>Low contrast between thick and thin strokes</li>
        <li>Diagonal stress in the strokes</li>
        <li>Slanted serifs on lower-case ascenders</li>
    </ol>
    <h3>Laying the best for successful prototyping</h3>
    <p>A serif is a small shape or projection that appears at the beginning:</p>
    <blockquote>
        <p>Flowbite is just awesome. It contains tons of predesigned components and pages starting from
            login screen to complex dashboard. Perfect choice for your next SaaS application.</p>
    </blockquote>
    <h4>Code example</h4>
    <p>A serif is a small shape or projection that appears at the beginning or end of a stroke on a letter.
        Typefaces with serifs are called serif typefaces. Serif fonts are classified as one of the
        following:</p>
    <pre><code class="language-html">&lt;dl class="grid grid-cols-2 gap-8 max-w-screen-md text-gray-900 sm:grid-cols-3 dark:text-white"&gt;
&lt;div class="flex flex-col justify-center items-center"&gt;
  &lt;dt class="mb-2 text-3xl font-extrabold"&gt;73M+&lt;/dt&gt;
  &lt;dd class="text-lg font-normal text-gray-500 dark:text-gray-400"&gt;developers&lt;/dd&gt;
&lt;/div&gt;
&lt;div class="flex flex-col justify-center items-center"&gt;
  &lt;dt class="mb-2 text-3xl font-extrabold"&gt;1B+&lt;/dt&gt;
  &lt;dd class="text-lg font-normal text-gray-500 dark:text-gray-400"&gt;contributors&lt;/dd&gt;
&lt;/div&gt;
&lt;div class="flex flex-col justify-center items-center"&gt;
  &lt;dt class="mb-2 text-3xl font-extrabold"&gt;4M+&lt;/dt&gt;
  &lt;dd class="text-lg font-normal text-gray-500 dark:text-gray-400"&gt;organizations&lt;/dd&gt;
&lt;/div&gt;
&lt;/dl&gt;
</code></pre>
    <h4>Table example</h4>
    <p>A serif is a small shape or projection that appears at the beginning or end of a stroke on a letter.
    </p>
    <table>
        <thead>
            <tr>
                <th>Country</th>
                <th>Date &amp; Time</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>United States</td>
                <td>April 21, 2021</td>
                <td><strong>$2,300</strong></td>
            </tr>
            <tr>
                <td>Canada</td>
                <td>May 31, 2021</td>
                <td><strong>$300</strong></td>
            </tr>
            <tr>
                <td>United Kingdom</td>
                <td>June 3, 2021</td>
                <td><strong>$2,500</strong></td>
            </tr>
            <tr>
                <td>Australia</td>
                <td>June 23, 2021</td>
                <td><strong>$3,543</strong></td>
            </tr>
            <tr>
                <td>Germany</td>
                <td>July 6, 2021</td>
                <td><strong>$99</strong></td>
            </tr>
            <tr>
                <td>France</td>
                <td>August 23, 2021</td>
                <td><strong>$2,540</strong></td>
            </tr>
        </tbody>
    </table>
    <h3>Best practices for setting up your prototype</h3>
    <p><strong>Low fidelity or high fidelity?</strong> Fidelity refers to how close a prototype will be to
        the real deal. If you’re simply preparing a quick visual aid for a presentation, a low-fidelity
        prototype — like a wireframe with placeholder images and some basic text — would be more than
        enough. But if you’re going for more intricate usability testing, a high-fidelity prototype — with
        on-brand colors, fonts and imagery — could help get more pointed results.</p>
    <p><strong>Consider your user</strong>. To create an intuitive user flow, try to think as your user
        would when interacting with your product. While you can fine-tune this during beta testing,
        considering your user’s needs and habits early on will save you time by setting you on the right
        path.</p>
    <p><strong>Start from the inside out</strong>. A nice way to both organize your tasks and create more
        user-friendly prototypes is by building your prototypes ‘inside out’. Start by focusing on what will
        be important to your user, like a Buy now button or an image gallery, and list each element by order
        of priority. This way, you’ll be able to create a prototype that puts your users’ needs at the heart
        of your design.</p>
    <p>And there you have it! Everything you need to design and share prototypes — right in Flowbite Figma.
    </p>

</div> --}}
