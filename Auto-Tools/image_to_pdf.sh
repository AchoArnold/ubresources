for file in *
do
	convert "$file" "Processed/${file%.*}.pdf"
done
