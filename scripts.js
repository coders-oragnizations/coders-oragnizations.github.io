// Инициализация EmailJS с использованием вашего user_id
(function() {
    emailjs.init("YOUR_USER_ID"); // замените на ваш user_id из EmailJS
})();

document.getElementById('subscribe-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Отменяем стандартное поведение формы

    const email = document.getElementById('email').value;
    const messageElement = document.getElementById('message');

    // Проверка на наличие email
    if (!email) {
        messageElement.textContent = 'Пожалуйста, введите ваш email.';
        return;
    }

    // Отправка формы через EmailJS
    const templateParams = {
        email: email
    };

    emailjs.send('YOUR_SERVICE_ID', 'YOUR_TEMPLATE_ID', templateParams)  // Замените на свой service_id и template_id
        .then(function(response) {
            messageElement.textContent = 'Спасибо за подписку!';  // Успешное отправление
        }, function(error) {
            messageElement.textContent = 'Ошибка при отправке. Попробуйте еще раз.';  // Ошибка отправки
        });
});
