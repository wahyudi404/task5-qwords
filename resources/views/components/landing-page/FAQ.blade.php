@props(['questions'])
<section>
    <div class="container mx-auto px-4 lg:px-0 py-20 text-center">
        <h1 class="text-3xl lg:text-4xl font-semibold text-textColor leading-tight mb-6">
            Pertanyaan Yang Sering Diajukan
        </h1>

        <div class="flex flex-col justify-center items-center gap-6 text-left">
            @foreach ($questions as $index => $question)
            <div class="w-full md:w-[80%] lg:w-3/5 px-8 py-6 bg-gray-100 rounded-2xl overflow-hidden">
                <div onclick="toggleAnswer({{ $index }})" class="question flex justify-between items-center cursor-pointer">
                    <h1 class="text-base font-semibold text-textColor">{{ $question['quest'] }}</h1>
                    <x-icons.chevron-down class="chevron-down w-7 h-7 transition-default" />
                </div>
                <div class="FAQ-answer">
                    <hr>
                    <div class="mt-4 text-justify font-normal text-base text-textColor">
                        {!! $question['answer'] !!}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script>
        const questions = document.querySelectorAll('.question');
        const chevronDown = document.querySelectorAll('.chevron-down');
        const FAQanswer = document.querySelectorAll('.FAQ-answer');

        function toggleAnswer(idx) {
            FAQanswer.forEach((element, index) => {
                if(idx != index) {
                    element.classList.remove('show')
                }
            });

            chevronDown.forEach((element, index) => {
                if(idx != index) {
                    element.classList.remove('active-chevron-down')
                }
            });

            FAQanswer[idx].classList.toggle('show')
            chevronDown[idx].classList.toggle('active-chevron-down')
        }
    </script>
</section>
