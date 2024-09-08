function toggleAnswer(element) {
    const answer = element.nextElementSibling; // Находим следующий элемент (ответ)
    
    if (answer.classList.contains('show')) {
        answer.classList.remove('show');
        answer.classList.add('hidden');
        element.querySelector('.plus-icon').textContent = '+'; // Меняем знак на плюс
        element.querySelector('.plus-icon').classList.remove('icon-transition'); // Убираем класс для анимации
    } else {
        // Скрываем все другие ответы
        const allAnswers = document.querySelectorAll('.answer.show');
        allAnswers.forEach((ans) => {
            ans.classList.remove('show');
            ans.classList.add('hidden');
            ans.previousElementSibling.querySelector('.plus-icon').textContent = '+'; // Меняем знак на плюс
            ans.previousElementSibling.querySelector('.plus-icon').classList.remove('icon-transition'); // Убираем класс для анимации
        });
        
        answer.classList.remove('hidden');
        answer.classList.add('show');
        element.querySelector('.plus-icon').textContent = '-'; // Меняем знак на минус
        element.querySelector('.plus-icon').classList.add('icon-transition'); // Добавляем класс для анимации
    }
}
