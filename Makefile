#src_files = index.md ueber_uns.md
trg_files = index.php ueber_uns.php kontakt.php impressum.php datenschutz.php impulse.php konditorei.php sehnsucht.php

titel = "Echtes Leben finden"

all: $(trg_files)

%.html: %.md
	pandoc --from markdown --to html --output $*.html $*.md

index.php: index.html index.md menu.txt
	generate_php -v -n 1 -t $(titel) index.html index.php

ueber_uns.php: ueber_uns.html ueber_uns.md
	generate_php -v -n 2 -t $(titel) ueber_uns.html ueber_uns.php

kontakt.php: kontakt.html kontakt.md
	generate_php -v -e -n 3 -t $(titel) kontakt.html kontakt.php

impressum.php: impressum.html impressum.md
	generate_php -v -n 4 -t $(titel) impressum.html impressum.php

datenschutz.php: datenschutz.html datenschutz.md
	generate_php -v -n 5 -t $(titel) datenschutz.html datenschutz.php

impulse.php: impulse.html impulse.md
	generate_php -v -n 5 -t $(titel) impulse.html impulse.php

konditorei.php: konditorei.html konditorei.md
	generate_php -v -n 5 -t $(titel) konditorei.html konditorei.php

sehnsucht.php: sehnsucht.html sehnsucht.md
	generate_php -v -n 5 -t $(titel) sehnsucht.html sehnsucht.php

clean:
ifneq (,$(wildcard ./*.html))
	rm *.html
endif
ifneq (,$(wildcard ./*.php))
	rm *.php
endif

