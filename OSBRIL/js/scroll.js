function scrollTop() {
  const topBtn = document.querySelector('#scrollToTopButton');

  topBtn.addEventListener('click', (e) => {
    e.preventDefault();

    seamless.scrollIntoView(document.querySelector('.header'), {
      behavior: 'smooth',
      block: 'center',
      inline: 'center',
    });
  });
}

const btnUp = {
  el: document.querySelector('.btn-up'),
  show() {
    // удалим у кнопки класс btn-up_hide
    this.el.classList.remove('btn-up_hide');
  },
  hide() {
    // добавим к кнопке класс btn-up_hide
    this.el.classList.add('btn-up_hide');
  },
  addEventListener() {
    // при прокрутке содержимого страницы
    window.addEventListener('scroll', () => {
      // определяем величину прокрутки
      const scrollY = window.scrollY || document.documentElement.scrollTop;
      // если страница прокручена больше чем на 400px, то делаем кнопку видимой, иначе скрываем
      scrollY > 400 ? this.show() : this.hide();
    });
  },
};
btnUp.addEventListener();

scrollTop();
