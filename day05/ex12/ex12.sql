SELECT last_name, first_name
FROM user_card
WHERE user_card.last_name LIKE '%-%'
OR user_card.first_name LIKE'%-%'
ORDER BY last_name ASC, first_name ASC;