VERSION 5.00
Object = "{67397AA1-7FB1-11D0-B148-00A0C922E820}#6.0#0"; "MSADODC.OCX"
Begin VB.Form Choice 
   Caption         =   "Choose to add or remove"
   ClientHeight    =   1845
   ClientLeft      =   4155
   ClientTop       =   3900
   ClientWidth     =   4680
   Icon            =   "Choice.frx":0000
   LinkTopic       =   "Form1"
   ScaleHeight     =   1845
   ScaleWidth      =   4680
   Begin MSAdodcLib.Adodc Adodc1 
      Height          =   330
      Left            =   2160
      Top             =   720
      Visible         =   0   'False
      Width           =   1935
      _ExtentX        =   3413
      _ExtentY        =   582
      ConnectMode     =   0
      CursorLocation  =   3
      IsolationLevel  =   -1
      ConnectionTimeout=   15
      CommandTimeout  =   30
      CursorType      =   3
      LockType        =   3
      CommandType     =   1
      CursorOptions   =   0
      CacheSize       =   50
      MaxRecords      =   0
      BOFAction       =   0
      EOFAction       =   0
      ConnectStringType=   1
      Appearance      =   1
      BackColor       =   -2147483643
      ForeColor       =   -2147483640
      Orientation     =   0
      Enabled         =   -1
      Connect         =   "Provider=Microsoft.Jet.OLEDB.4.0;Data Source=D:\VB Pro\elibrary.mdb;Persist Security Info=False"
      OLEDBString     =   "Provider=Microsoft.Jet.OLEDB.4.0;Data Source=D:\VB Pro\elibrary.mdb;Persist Security Info=False"
      OLEDBFile       =   ""
      DataSourceName  =   ""
      OtherAttributes =   ""
      UserName        =   ""
      Password        =   ""
      RecordSource    =   "UPDATE Library;"
      Caption         =   "Adodc1"
      BeginProperty Font {0BE35203-8F91-11CE-9DE3-00AA004BB851} 
         Name            =   "MS Sans Serif"
         Size            =   8.25
         Charset         =   0
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      _Version        =   393216
   End
   Begin VB.CommandButton cmdOk 
      Caption         =   "&Ok"
      Height          =   495
      Left            =   3240
      TabIndex        =   2
      Top             =   960
      Width           =   1215
   End
   Begin VB.CommandButton cmdRemove 
      Caption         =   "&Remove"
      Height          =   495
      Left            =   1680
      TabIndex        =   1
      Top             =   960
      Width           =   1335
   End
   Begin VB.CommandButton cmdAdd 
      Caption         =   "&Add"
      Height          =   495
      Left            =   240
      TabIndex        =   0
      Top             =   960
      Width           =   1335
   End
   Begin VB.Image Image1 
      Height          =   720
      Left            =   480
      Picture         =   "Choice.frx":1CFA
      Top             =   0
      Width           =   720
   End
End
Attribute VB_Name = "Choice"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Private Sub cmdAdd_Click()
Dim bookid As Integer
Dim amt As Integer
Dim val As Integer
bookid = InputBox("Enter the book id that need to be modified")
amt = InputBox("Enter the quantity of books available presently")
frmLibrary_admin.Adodc1.Refresh
Do Until frmLibrary_admin.Adodc1.Recordset.EOF
 If frmLibrary_admin.Adodc1.Recordset.Fields("ID").Value = bookid Then
    With frmLibrary_admin.Adodc1
        .Refresh
        .Recordset.Fields("Quantity") = InputBox("Enter the number of books need to be added") + amt
        .Recordset.Update
        .Refresh
    End With
 Else
    frmLibrary_admin.Adodc1.Recordset.MoveNext
 End If
Loop
End Sub

Private Sub cmdOk_Click()
Unload Me
End Sub

Private Sub cmdRemove_Click()
Dim bookid As Integer
Dim amt As Integer
Dim val As Integer
bookid = InputBox("Enter the book id that need to be modified")
amt = InputBox("Enter the quantity of books available presently")
frmLibrary_admin.Adodc1.Refresh
Do Until frmLibrary_admin.Adodc1.Recordset.EOF
 If frmLibrary_admin.Adodc1.Recordset.Fields("ID").Value = bookid Then
    With frmLibrary_admin.Adodc1
        .Refresh
        .Recordset.Fields("Quantity") = amt - InputBox("Enter the number of books need to be removed")
        .Recordset.Update
        .Refresh
    End With
 Else
    frmLibrary_admin.Adodc1.Recordset.MoveNext
 End If
Loop
End Sub

