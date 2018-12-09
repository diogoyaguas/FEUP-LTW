<?php
    function getRandomQuote()
    {
        global $dbh;
		try {
			$stmt = $dbh->prepare('SELECT Quote FROM Quotes ORDER BY RANDOM() LIMIT 1');
			if($stmt->execute()) {
				$row = $stmt->fetch();
				return $row['Quote'];
			}
			else
				return -1;
		} catch(PDOException $e) {
			return -1;
		}
    }

?>