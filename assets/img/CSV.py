import os, csv
cwd = os.getcwd()

f=open(cwd % "list.csv",'w+')
w=csv.writer(f)
for path, dirs, files in os.walk("/home/ajmain/Desktop/localhost/flower/assets/img/products"):
    files.sort()
    for filename in files:
        w.writerow([filename])
