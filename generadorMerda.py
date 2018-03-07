import random, string,MySQLdb
def iniciarDB ():
    try:
        db = MySQLdb.connect(host="127.0.0.1",    # your host, usually localhost
                         user="root",         # your username
                         passwd="",  # your password
                         db="granja")        # name of the data base

        return db
    except MySQLdb.Error, e:
        print "Esta encesa la base de dades?" + str(e)
        return False

def crearCodi ():
	return "ES_" + ''.join(random.choice(string.ascii_uppercase + string.digits) for _ in range(8))

def crearDataEntrada ():
	dia = random.randint(1, 28)
	mes = random.randint(1, 12)
	year = random.randint(2000, 2018)
	return str(year) + "-" + str(mes) + "-" + str(dia)

def sexe ():
	if random.randint(0,1) == 0:
		return "m"
	else:
		return "F"


def documentSanitari():
	return ''.join(random.choice(string.ascii_uppercase + string.digits) for _ in range(8))

def motiuEntrada():
	if random.randint(0,1) == 0:
		return "Compra"
	else:
		return "Naixement"



def entrarAnimal():
	codi = crearCodi()
	dataEntrada = crearDataEntrada()
	sql = "INSERT INTO animals (codi,dataNaixement,raca,motiuEntrada,sexe,procedencia,documentSanitari,dataEntrada,dataBaixa,Estat) VALUES('" + str(codi) + "' , '2018-01-01' , '" +  "carn' ,'"  + str(motiuEntrada()) + "', '" + sexe() + "', 'Santiago',"  + " '" + str(documentSanitari()) + "', '" + str(dataEntrada) + "',NULL,'VIU')"
	#print sql
	cur.execute(sql)
	db.commit()

db = iniciarDB()
cur = db.cursor()

for i in xrange(1,100):
	entrarAnimal()

