import os, csv
cwd = os.getcwd()

f=open(cwd + "/list.csv",'w+')
w=csv.writer(f)
for path, dirs, files in os.walk(cwd +"/products"):
    files.sort()
    for filename in files:
        #w.writerow([filename])
        #print([filename])
        #print([path])              shows entire path of the files
        folder=path.split('/')[-1]
        #print([folder])
        name= filename.split('.jpg')[0]




        a =name, filename, folder
        print(a)
        w.writerow(a)       #write to csv
