# sistema de login
# Usuario: admin e senha 123
from tkinter import *
from tkinter.commondialog import *



janela = Tk()

def entrar():
    login = str(ent1.get())
    senha = str(ent2.get())
    

    if login == "admin" and senha == "123":
       showinfo(title="Login",message="Acesso Liberado")
        
    else:
       showinfo(title="Login",message="Acesso Negado")
    
corFundo = "#500"
corLetra = "white"

lbt = Label(janela,text="SISTEMA DE LOGIN",bg=corFundo,fg=corLetra,font=("verdana", 16))
lbt.place(x=50,y=10)

ent1 = Entry(janela)
ent1.place(x=80,y=100)

ent2 = Entry(janela,show="*")
ent2.place(x=80,y=140)

lblog = Label(janela,text="Login:",bg=corFundo,fg=corLetra)
lblog.place(x=30,y=100)

lbsenha = Label(janela,text="Senha:",bg=corFundo,fg=corLetra)
lbsenha.place(x=30,y=140)

bt = Button(janela,text="Entrar",bg="#511",fg="white",command = entrar)
bt.place(x=100,y=200)

janela.title("SISTEMA DE LOGIN")
janela.geometry("300x350+300+300")
janela.configure(background=corFundo)
janela.mainloop()


