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
    <section class="p-quiz-box js-quiz" data-quiz="0">
      <div class="p-quiz-box__question">
        <h2 class="p-quiz-box__question__title">
          <span class="p-quiz-box__label">Q1</span>
          <span class="p-quiz-box__question__title__text">日本のIT人材が2030年には最大どれくらい不足すると言われているでしょうか？</span>
        </h2>
        <figure class="p-quiz-box__question__image">
          <img src="../assets/img/quiz/img-quiz01.png" alt="">
        </figure>
      </div>
      <div class="p-quiz-box__answer">
        <span class="p-quiz-box__label p-quiz-box__label--accent">A</span>
        <ul class="p-quiz-box__answer__list">
          <li class="p-quiz-box__answer__item">
            <button class="p-quiz-box__answer__button js-answer" data-answer="0">
              約28万人<i class="u-icon__arrow"></i>
            </button>
          </li>
          <li class="p-quiz-box__answer__item">
            <button class="p-quiz-box__answer__button js-answer" data-answer="1">
              約79万人<i class="u-icon__arrow"></i>
            </button>
          </li>
          <li class="p-quiz-box__answer__item">
            <button class="p-quiz-box__answer__button js-answer" data-answer="2">
              約183万人<i class="u-icon__arrow"></i>
            </button>
          </li>
        </ul>
        <div class="p-quiz-box__answer__correct js-answerBox">
          <p class="p-quiz-box__answer__correct__title js-answerTitle"></p>
          <p class="p-quiz-box__answer__correct__content">
            <span class="p-quiz-box__answer__correct__content__label">A</span>
            <span class="js-answerText"></span>
          </p>
        </div>
      </div>
      <cite class="p-quiz-box__note">
        <i class="u-icon__note"></i>経済産業省 2019年3月 － IT 人材需給に関する調査
      </cite>
    </section>
    <!-- ./p-quiz-box -->
  
    <section class="p-quiz-box js-quiz" data-quiz="1">
      <div class="p-quiz-box__question">
        <h2 class="p-quiz-box__question__title">
          <span class="p-quiz-box__label">Q2</span>
          <span class="p-quiz-box__question__title__text">既存業界のビジネスと、先進的なテクノロジーを結びつけて生まれた、新しいビジネスのことをなんと言うでしょう？</span>
        </h2>
        <figure class="p-quiz-box__question__image">
          <img src="../assets/img/quiz/img-quiz02.png" alt="">
        </figure>
      </div>
      <div class="p-quiz-box__answer">
        <span class="p-quiz-box__label p-quiz-box__label--accent">A</span>
        <ul class="p-quiz-box__answer__list">
          <li class="p-quiz-box__answer__item">
            <button class="p-quiz-box__answer__button js-answer" data-answer="0">
              INTECH<i class="u-icon__arrow"></i>
            </button>
          </li>
          <li class="p-quiz-box__answer__item">
            <button class="p-quiz-box__answer__button js-answer" data-answer="1">
              BIZZTECH<i class="u-icon__arrow"></i>
            </button>
          </li>
          <li class="p-quiz-box__answer__item">
            <button class="p-quiz-box__answer__button js-answer" data-answer="2">
              X-TECH<i class="u-icon__arrow"></i>
            </button>
          </li>
        </ul>
        <div class="p-quiz-box__answer__correct js-answerBox">
          <p class="p-quiz-box__answer__correct__title js-answerTitle"></p>
          <p class="p-quiz-box__answer__correct__content">
            <span class="p-quiz-box__answer__correct__content__label">A</span>
            <span class="js-answerText"></span>
          </p>
        </div>
      </div>
    </section>
    <!-- ./p-quiz-box -->
  
    <section class="p-quiz-box js-quiz" data-quiz="2">
      <div class="p-quiz-box__question">
        <h2 class="p-quiz-box__question__title">
          <span class="p-quiz-box__label">Q3</span>
          <span class="p-quiz-box__question__title__text">IoTとは何の略でしょう？</span>
        </h2>
        <figure class="p-quiz-box__question__image">
          <img src="../assets/img/quiz/img-quiz03.png" alt="">
        </figure>
      </div>
      <div class="p-quiz-box__answer">
        <span class="p-quiz-box__label p-quiz-box__label--accent">A</span>
        <ul class="p-quiz-box__answer__list">
          <li class="p-quiz-box__answer__item">
            <button class="p-quiz-box__answer__button js-answer" data-answer="0">
              Internet of Things<i class="u-icon__arrow"></i>
            </button>
          </li>
          <li class="p-quiz-box__answer__item">
            <button class="p-quiz-box__answer__button js-answer" data-answer="1">
              Integrate into Technology<i class="u-icon__arrow"></i>
            </button>
          </li>
          <li class="p-quiz-box__answer__item">
            <button class="p-quiz-box__answer__button js-answer" data-answer="2">
              Information on Tool<i class="u-icon__arrow"></i>
            </button>
          </li>
        </ul>
        <div class="p-quiz-box__answer__correct js-answerBox">
          <p class="p-quiz-box__answer__correct__title js-answerTitle"></p>
          <p class="p-quiz-box__answer__correct__content">
            <span class="p-quiz-box__answer__correct__content__label">A</span>
            <span class="js-answerText"></span>
          </p>
        </div>
      </div>
    </section>
    <!-- ./p-quiz-box -->
  
    <section class="p-quiz-box js-quiz" data-quiz="3">
      <div class="p-quiz-box__question">
        <h2 class="p-quiz-box__question__title">
          <span class="p-quiz-box__label">Q4</span>
          <span
            class="p-quiz-box__question__title__text">イギリスのコンピューター科学者であるギャビン・ウッド氏が提唱した、ブロックチェーン技術を活用した「次世代分散型インターネット」のことをなんと言うでしょう？</span>
        </h2>
        <figure class="p-quiz-box__question__image">
          <img src="../assets/img/quiz/img-quiz04.png" alt="">
        </figure>
      </div>
      <div class="p-quiz-box__answer">
        <span class="p-quiz-box__label p-quiz-box__label--accent">A</span>
        <ul class="p-quiz-box__answer__list">
          <li class="p-quiz-box__answer__item">
            <button class="p-quiz-box__answer__button js-answer" data-answer="0">
              Society 5.0<i class="u-icon__arrow"></i>
            </button>
          </li>
          <li class="p-quiz-box__answer__item">
            <button class="p-quiz-box__answer__button js-answer" data-answer="1">
              CyPhy<i class="u-icon__arrow"></i>
            </button>
          </li>
          <li class="p-quiz-box__answer__item">
            <button class="p-quiz-box__answer__button js-answer" data-answer="2">
              SDGs<i class="u-icon__arrow"></i>
            </button>
          </li>
        </ul>
        <div class="p-quiz-box__answer__correct js-answerBox">
          <p class="p-quiz-box__answer__correct__title js-answerTitle"></p>
          <p class="p-quiz-box__answer__correct__content">
            <span class="p-quiz-box__answer__correct__content__label">A</span>
            <span class="js-answerText"></span>
          </p>
        </div>
      </div>
      <cite class="p-quiz-box__note">
        <i class="u-icon__note"></i>Society5.0 - 科学技術政策 - 内閣府
      </cite>
    </section>
    <!-- ./p-quiz-box -->
  
    <section class="p-quiz-box js-quiz" data-quiz="4">
      <div class="p-quiz-box__question">
        <h2 class="p-quiz-box__question__title">
          <span class="p-quiz-box__label">Q5</span>
          <span
            class="p-quiz-box__question__title__text">イギリスのコンピューター科学者であるギャビン・ウッド氏が提唱した、ブロックチェーン技術を活用した「次世代分散型インターネット」のことをなんと言うでしょう？</span>
        </h2>
        <figure class="p-quiz-box__question__image">
          <img src="../assets/img/quiz/img-quiz05.png" alt="">
        </figure>
      </div>
      <div class="p-quiz-box__answer">
        <span class="p-quiz-box__label p-quiz-box__label--accent">A</span>
        <ul class="p-quiz-box__answer__list">
          <li class="p-quiz-box__answer__item">
            <button class="p-quiz-box__answer__button js-answer" data-answer="0">
              Web3.0<i class="u-icon__arrow"></i>
            </button>
          </li>
          <li class="p-quiz-box__answer__item">
            <button class="p-quiz-box__answer__button js-answer" data-answer="1">
              NFT<i class="u-icon__arrow"></i>
            </button>
          </li>
          <li class="p-quiz-box__answer__item">
            <button class="p-quiz-box__answer__button js-answer" data-answer="2">
              メタバース<i class="u-icon__arrow"></i>
            </button>
          </li>
        </ul>
        <div class="p-quiz-box__answer__correct js-answerBox">
          <p class="p-quiz-box__answer__correct__title js-answerTitle"></p>
          <p class="p-quiz-box__answer__correct__content">
            <span class="p-quiz-box__answer__correct__content__label">A</span>
            <span class="js-answerText"></span>
          </p>
        </div>
      </div>
    </section>
    <!-- ./p-quiz-box -->
  
    <section class="p-quiz-box js-quiz" data-quiz="5">
      <div class="p-quiz-box__question">
        <h2 class="p-quiz-box__question__title">
          <span class="p-quiz-box__label">Q6</span>
          <span class="p-quiz-box__question__title__text">先進テクノロジー活用企業と出遅れた企業の収益性の差はどれくらいあると言われているでしょうか？</span>
        </h2>
        <figure class="p-quiz-box__question__image">
          <img src="../assets/img/quiz/img-quiz06.png" alt="">
        </figure>
      </div>
      <div class="p-quiz-box__answer">
        <span class="p-quiz-box__label p-quiz-box__label--accent">A</span>
        <ul class="p-quiz-box__answer__list">
          <li class="p-quiz-box__answer__item">
            <button class="p-quiz-box__answer__button js-answer" data-answer="0">
              約2倍<i class="u-icon__arrow"></i>
            </button>
          </li>
          <li class="p-quiz-box__answer__item">
            <button class="p-quiz-box__answer__button js-answer" data-answer="1">
              約5倍<i class="u-icon__arrow"></i>
            </button>
          </li>
          <li class="p-quiz-box__answer__item">
            <button class="p-quiz-box__answer__button js-answer" data-answer="2">
              約11倍<i class="u-icon__arrow"></i>
            </button>
          </li>
        </ul>
        <div class="p-quiz-box__answer__correct js-answerBox">
          <p class="p-quiz-box__answer__correct__title js-answerTitle"></p>
          <p class="p-quiz-box__answer__correct__content">
            <span class="p-quiz-box__answer__correct__content__label">A</span>
            <span class="js-answerText"></span>
          </p>
        </div>
      </div>
      <cite class="p-quiz-box__note">
        <i class="u-icon__note"></i>Accenture Technology Vision 2021
      </cite>
    </section>
    <!-- ./p-quiz-box -->
  </div>
  <!-- /.l-container .p-quiz-container -->
  
  </div>
</x-app>







