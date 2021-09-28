<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Alpine Plugins -->
        <script defer src="https://unpkg.com/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
        <script defer src="https://unpkg.com/@alpinejs/persist@3.x.x/dist/cdn.min.js"></script>
        <script defer src="https://unpkg.com/@alpinejs/trap@3.x.x/dist/cdn.min.js"></script>

        <!-- Alpine Core -->
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <style>
            .container {
                max-width: 600px;
                margin: 20px auto;
            }

            .mt-alot {
                margin-top: 800px;
            }

            .active {
                font-weight: bold;
            }

            .theme-container {
                --bg: lightgray;
                --color-text: #333333;
            }

            .theme-container[data-theme='dark'] {
                --bg: #333333;
                --color-text: #B5B5B5;
            }

            .theme-container {
                background: var(--bg);
                color: var(--color-text);
                padding: 20px 10px;
            }

            .modal-window {
                background: white;
                margin: 20px;
                margin-top: 200px;
                padding: 20px;
                max-width: 500px;
            }

            .modal-open {
                position: fixed;
                display: flex;
                align-items: flex-start;
                justify-content: center;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                z-index: 50;
            }

            .modal-heading {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 10px;
                font-size: 20px;
            }

            .overlay {
                overflow: auto;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1 x-data="{ message: 'Alpine Plugins' }" x-text="message"></h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor totam alias aspernatur fuga tempore! Labore at eligendi modi similique debitis, magni corrupti nesciunt, nulla culpa perspiciatis exercitationem recusandae reiciendis doloribus atque incidunt. Esse consectetur ex sequi cupiditate quibusdam non eum eligendi magni vero, autem a dolorum aperiam nesciunt dolores. Sed veritatis ab, pariatur laboriosam eaque facilis delectus praesentium repellat, illo, sint illum aut repudiandae eum nostrum sequi? Assumenda voluptas architecto porro, vitae accusantium blanditiis, repudiandae, aliquid exercitationem eius fugit distinctio expedita fugiat tempore reiciendis magni? Dolorum magnam doloremque commodi assumenda reprehenderit tenetur doloribus a quia nam fugit. Eaque, asperiores dolor?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor totam alias aspernatur fuga tempore! Labore at eligendi modi similique debitis, magni corrupti nesciunt, nulla culpa perspiciatis exercitationem recusandae reiciendis doloribus atque incidunt. Esse consectetur ex sequi cupiditate quibusdam non eum eligendi magni vero, autem a dolorum aperiam nesciunt dolores. Sed veritatis ab, pariatur laboriosam eaque facilis delectus praesentium repellat, illo, sint illum aut repudiandae eum nostrum sequi? Assumenda voluptas architecto porro, vitae accusantium blanditiis, repudiandae, aliquid exercitationem eius fugit distinctio expedita fugiat tempore reiciendis magni? Dolorum magnam doloremque commodi assumenda reprehenderit tenetur doloribus a quia nam fugit. Eaque, asperiores dolor?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor totam alias aspernatur fuga tempore! Labore at eligendi modi similique debitis, magni corrupti nesciunt, nulla culpa perspiciatis exercitationem recusandae reiciendis doloribus atque incidunt. Esse consectetur ex sequi cupiditate quibusdam non eum eligendi magni vero, autem a dolorum aperiam nesciunt dolores. Sed veritatis ab, pariatur laboriosam eaque facilis delectus praesentium repellat, illo, sint illum aut repudiandae eum nostrum sequi? Assumenda voluptas architecto porro, vitae accusantium blanditiis, repudiandae, aliquid exercitationem eius fugit distinctio expedita fugiat tempore reiciendis magni? Dolorum magnam doloremque commodi assumenda reprehenderit tenetur doloribus a quia nam fugit. Eaque, asperiores dolor?</p>
            <div class="mt-alot"></div>
            <div
                x-data="{ isVisible: false }"
                x-intersect:enter="isVisible = true"
                x-intersect:leave="isVisible = false"
            >
                <h2 x-show="isVisible" x-transition.duration.2000ms>Some heading here</h2>
                <button @click="isVisible = !isVisible">Toggle Heading</button>
            </div>

            <div class="mt-alot"></div>

            <div
                x-data="{ isVisible: false }"
                x-intersect:enter="isVisible = true"
                x-intersect:leave="isVisible = false"
            >
                <h2 x-show="isVisible" x-transition.duration.2000ms>Another Heading</h2>
                <button @click="isVisible = !isVisible">Toggle Heading</button>
            </div>

            <img loading="lazy" src="http://placekitten.com/300/300" alt="kitten">

            <div x-data="{isVisible: false}" x-intersect.once="isVisible = true">
                <template x-if="isVisible">
                    <img src="http://placekitten.com/400/400" alt="kitten">
                </template>
            </div>

            <div class="mt-alot"></div>

            <div x-data="{ tab: $persist('tab1').as('other-tab') }">
                <nav>
                    <button :class="{ 'active': tab === 'tab1' }" @click="tab = 'tab1'">Tab 1</button>
                    <button :class="{ 'active': tab === 'tab2' }" @click="tab = 'tab2'">Tab 2</button>
                    <button :class="{ 'active': tab === 'tab3' }" @click="tab = 'tab3'">Tab 3</button>
                </nav>

                <div x-show="tab === 'tab1'">
                    Tab 1 content
                </div>
                <div x-show="tab === 'tab2'">
                    Tab 2 content
                </div>
                <div x-show="tab === 'tab3'">
                    Tab 3 content
                </div>
            </div>

            <div class="mt-alot"></div>

            <div class="theme-container" x-data="{ theme: $persist('light') }" :data-theme="theme">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam numquam repellendus porro laudantium assumenda consequatur praesentium laborum maxime. Optio, fuga.</p>
                <button @click="theme = theme === 'light' ? 'dark' : 'light'">
                    Toggle theme
                </button>
            </div>

            <div class="mt-alot"></div>

            <div
                class="modal-container"
                x-data="{ 'isModalOpen': false }"
                @keydown.escape="isModalOpen = false"
            >
                <button type="button" @click="isModalOpen = true">Open modal</button>

                <!-- overlay -->
                <div
                    x-show="isModalOpen"
                    class="overlay"
                    :class="{ 'modal-open': isModalOpen }"
                    style="background-color: rgba(0,0,0,0.5)"
                >
                    <!-- modal -->
                    <div
                        class="modal-window"
                        x-show="isModalOpen"
                        x-trap="isModalOpen"
                        @click.away="isModalOpen = false"
                    >
                        <div class="modal-heading">
                            <h4>Modal Title</h4>
                            <button type="button" @click="isModalOpen = false">&times;</button>
                        </div>

                        <!-- content -->
                        <div>
                            <p>Modal Content here</p>

                            <form action="">
                                <input type="text" placeholder="Name">
                                <input type="email" placeholder="Email">
                            </form>
                        </div>

                    </div><!-- /modal -->
                </div><!-- /overlay -->
            </div>
        </div>
    </body>
</html>
