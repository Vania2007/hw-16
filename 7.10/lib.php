<?php

/**
 * Заміна порядку букв у рядку на протилежний.
 *
 * @param string $text Вхідний рядок.
 * @return string Рядок з протилежним порядком букв.
 */
function reverseString($text)
{
    return strrev($text);
}

/**
 * Видалення слів через одне з рядка.
 *
 * @param string $text Вхідний рядок.
 * @return string Рядок без слів через одне.
 */
function removeEverySecondWord($text)
{
    $words = explode(' ', $text);
    $filteredWords = [];

    foreach ($words as $index => $word) {
        if ($index % 2 === 0) { // Залишаємо тільки слова з парними індексами
            $filteredWords[] = $word;
        }
    }
    return implode(' ', $filteredWords);
}

/**
 * Формує вихідний рядок з перших літер кожного елемента масиву.
 *
 * @param array $words Масив слів.
 * @return string Рядок з перших літер.
 */
function getInitialsFromArray($words)
{
    $initials = '';

    foreach ($words as $word) {
        if (!empty($word)) {
            $initials .= strtoupper($word[0]); // Додаємо першу літеру в верхньому регістрі
        }
    }
    return $initials;
}

function countWords($text) {
    return str_word_count($text);
}

/**
 * Видалення всіх голосних з рядка.
 *
 * @param string $text Вхідний рядок.
 * @return string Рядок без голосних.
 */
function removeVowels($text) {
    return preg_replace('/[aeiouyAEIOUYаеиоуюяіїє]/u', '', $text);
}

/**
 * Перевірка, чи є рядок паліндромом.
 *
 * @param string $text Вхідний рядок.
 * @return bool true, якщо паліндром, false в іншому випадку.
 */
function isPalindrome($text) {
    $cleanedText = preg_replace('/\W/', '', mb_strtolower($text)); // Видаляємо небуквені символи та переводимо в нижній регістр
    return $cleanedText === strrev($cleanedText);
}

/**
 * Конвертація регістру: всі літери на великі або малі.
 *
 * @param string $text Вхідний рядок.
 * @param bool $toUpper Якщо true, конвертує в верхній регістр, якщо false - в нижній.
 * @return string Рядок в заданому регістрі.
 */
function convertCase($text, $toUpper = true) {
    return $toUpper ? strtoupper($text) : strtolower($text);
}