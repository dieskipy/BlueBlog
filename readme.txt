DB include 2 tables:
1)news:
  |num (int, key)
  |date (DATE)
  |views (int)
  |title (VARCHAR, 100 symb)
  |lemma (VARCHAR, 100symb)
  |text (text, 1000 symb)
  |img (VATCHAR, 255 symb)
  |isFit (bool or tinyint, for carousel)
2)user_database:
  |num (int, key)
  |email (VARCHAR, 25)
  |password (VARCHAR, 100) (stored encrypted)
  |isAdmin (bool or tinyint)
   //other are not required
  |date_birth (date)
  |nickname (VARCHAR, 10)

