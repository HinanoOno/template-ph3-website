<x-app>
  <x-slot name='title'>クイズページ</x-slot>
  <x-slot name='script'><script src="{{ asset('/js/quiz.js')}}" defer></script></x-slot>
  <section class="p-hero p-quiz-hero">
    <div class="l-container">
      <h1 class="p-hero__title">
        <span class="p-hero__title__label">POSSE課題</span>
        <span class="p-hero__title__inline">ITクイズ</span>
      </h1>
    </div>
  </section>
  <!-- /.p-hero .p-quiz-hero -->
  
  <div class="p-quiz-container l-container">
   @foreach($questions as $question)
    <section class="p-quiz-box js-quiz" data-quiz="{{$loop->index}}">
      <div class="p-quiz-box__question">
        <h2 class="p-quiz-box__question__title">
          <span class="p-quiz-box__label">Q{{$loop->index + 1}}</span>
          <span class="p-quiz-box__question__title__text">{{$question->content}}</span>
        </h2>
        <figure class="p-quiz-box__question__image">
          <img src="{{asset('storage/'.$question->image)}}" alt="" > 
        </figure>
      </div>
      <div class="p-quiz-box__answer">
        <span class="p-quiz-box__label p-quiz-box__label--accent">A</span>
        <ul class="p-quiz-box__answer__list">
          @foreach($question->choices as $choice)
            <li class="p-quiz-box__answer__item">
              <button class="p-quiz-box__answer__button js-answer" data-answer="{{$loop->index}}" data-correct="{{$choice->valid}}">
                {{$choice->name}}<i class="u-icon__arrow"></i>
              </button>
            </li>
          @endforeach
        </ul>
        <div class="p-quiz-box__answer__correct js-answerBox">
          <p class="p-quiz-box__answer__correct__title js-answerTitle"></p>
          <p class="p-quiz-box__answer__correct__content">
            <span class="p-quiz-box__answer__correct__content__label">A</span>
            <span class="js-answerText"></span>
          </p>
        </div>
      </div>
      @if(!empty($question->supplement))
      <cite class="p-quiz-box__note">
        <i class="u-icon__note"></i>{{$question->supplement}}
      @endif
    </section>
   @endforeach
  </div>
  <!-- /.l-container .p-quiz-container -->
  
  </div>
</x-app>







