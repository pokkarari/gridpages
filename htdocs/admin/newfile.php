<?php
//データの追加
$sql = "UPDATE news
                    SET
                    posted = ?,
                    title = ?,
                    message = ?,
                    WHERE id = ?";