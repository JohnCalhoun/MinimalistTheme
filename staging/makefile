.PHONY: screenshot.png

screenshot.png:
	CutyCapt --url=http://johnmcalhoun.com/dev --out=screenshot.png --min-width=1200 --min-height=900 && mogrify -crop 1200x900+0+0 +repage screenshot.png

all: screenshot.png

	
	
