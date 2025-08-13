import sys
from PySide6.QtWidgets import QApplication, QMainWindow
from PySide6.QtGui import QIcon
from PySide6.QtCore import QTimer
from PySide6.QtWidgets import QFileDialog, QMessageBox
from somma_ui import Ui_MainWindow


class MainGUI(QMainWindow):
   
    def __init__(self):
        super().__init__()
        self.ui = Ui_MainWindow()
        self.ui.setupUi(self)
        
        self.setWindowTitle("Semplice uso GUI con QT")
      
        
        #btn per fare la SOMMA
        self.ui.pushButton.clicked.connect(self.somma)
     
    # Funzione che svolge la somma al click del button
    def somma(self):
        print("AVVIO Somma...")
        self.num1testo = self.ui.num1.toPlainText().strip()
        self.num2testo = self.ui.num2.toPlainText().strip()
        somma = float(self.num1testo) + float(self.num2testo)
        self.ui.sum.setText(str(somma))
    
  
if __name__ == "__main__":
    print("AVVIO GUI...")
    app = QApplication(sys.argv)
    window = MainGUI()
    window.show()
    sys.exit(app.exec())
