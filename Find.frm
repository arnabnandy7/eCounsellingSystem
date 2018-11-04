VERSION 5.00
Begin VB.Form Find 
   Caption         =   "Find Book"
   ClientHeight    =   2490
   ClientLeft      =   60
   ClientTop       =   450
   ClientWidth     =   4680
   Icon            =   "Find.frx":0000
   LinkTopic       =   "Form1"
   ScaleHeight     =   2490
   ScaleWidth      =   4680
   StartUpPosition =   3  'Windows Default
   Begin VB.CommandButton cmdClear 
      Caption         =   "&Clear"
      Height          =   495
      Left            =   1800
      TabIndex        =   4
      Top             =   1800
      Width           =   1215
   End
   Begin VB.CommandButton cmdOk 
      Caption         =   "&Ok"
      Height          =   495
      Left            =   3240
      TabIndex        =   3
      Top             =   1800
      Width           =   1215
   End
   Begin VB.CommandButton cmdFind 
      Caption         =   "&Find"
      Height          =   495
      Left            =   360
      TabIndex        =   2
      Top             =   1800
      Width           =   1215
   End
   Begin VB.TextBox txtBookname 
      Height          =   375
      Left            =   240
      TabIndex        =   1
      Top             =   840
      Width           =   4215
   End
   Begin VB.Label Label1 
      Caption         =   "Enter a book name:"
      BeginProperty Font 
         Name            =   "MS Sans Serif"
         Size            =   8.25
         Charset         =   0
         Weight          =   700
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Left            =   240
      TabIndex        =   0
      Top             =   360
      Width           =   1695
   End
End
Attribute VB_Name = "Find"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Private Sub cmdClear_Click()
txtBookname.Text = " "
End Sub

Private Sub cmdFind_Click()
Dim bname As String
frmLibrary.Adodc1.Refresh
bname = txtBookname.Text
Do Until frmLibrary.Adodc1.Recordset.EOF
 If frmLibrary.Adodc1.Recordset.Fields("Title").Value = bname Then
    Find.Hide
    msg = MsgBox("This book is found on the list", vbOKCancel, "Find Books")
    Exit Sub
 Else
    frmLibrary.Adodc1.Recordset.MoveNext
 End If
Loop
msg = MsgBox("The book is not in list. try again", vbOKCancel, "Find Books")
If (msg = 1) Then
 Find.Show
 txtBookname.Text = " "
Else
    End
End If
End Sub

Private Sub cmdOk_Click()
Unload Me
End Sub

Private Sub Form_Load()
txtBookname.Text = " "
End Sub
