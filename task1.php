<?php

function checkPass() {
    return readline("Введите пароль: ") == readline("Введите повтор пароля: ") ? "Пароль принят" : "Пароль не принят";
};

echo checkPass();