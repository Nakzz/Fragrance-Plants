import os, csv
cwd = os.getcwd()
c=1000
f=open(cwd + "/list.csv",'w+')
w=csv.writer(f)
columns= "product_code", "product_name", "product_img_name", "product_category"
w.writerow(columns)
for path, dirs, files in os.walk(cwd +"/products"):
    files.sort()
    for filename in files:
        #w.writerow([filename])
        #print([filename])
        #print([path])              shows entire path of the files
        folder=path.split('/')[-1]
        #print([folder])
        name= filename.split('.jpg')[0]

        name = filename.replace('_',' ')

        product_code= "AB" + str(c)

        c =c+1
        a = product_code,name, filename, folder
        print(a)
        w.writerow(a)       #write to csv
