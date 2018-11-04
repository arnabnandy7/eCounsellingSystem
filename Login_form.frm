VERSION 5.00
Begin VB.Form Login_form 
   BorderStyle     =   0  'None
   Caption         =   "Log In "
   ClientHeight    =   3090
   ClientLeft      =   7020
   ClientTop       =   3450
   ClientWidth     =   5205
   ControlBox      =   0   'False
   Icon            =   "Login_form.frx":0000
   LinkTopic       =   "Form1"
   Picture         =   "Login_form.frx":1982
   ScaleHeight     =   3090
   ScaleWidth      =   5205
   ShowInTaskbar   =   0   'False
   Begin VB.CommandButton cmdClear 
      BackColor       =   &H0080FF80&
      Caption         =   "Clear"
      Height          =   495
      Left            =   2880
      MaskColor       =   &H0080FF80&
      Style           =   1  'Graphical
      TabIndex        =   5
      Top             =   2280
      Width           =   1455
   End
   Begin VB.CommandButton cmdLogin 
      BackColor       =   &H0080FF80&
      Caption         =   "Login"
      Height          =   495
      Left            =   1080
      Style           =   1  'Graphical
      TabIndex        =   4
      Top             =   2280
      Width           =   1455
   End
   Begin VB.TextBox txtpassword 
      Height          =   405
      IMEMode         =   3  'DISABLE
      Left            =   1440
      PasswordChar    =   "*"
      TabIndex        =   3
      Top             =   1320
      Width           =   3015
   End
   Begin VB.TextBox txtName 
      Height          =   375
      Left            =   1440
      TabIndex        =   2
      Top             =   720
      Width           =   3015
   End
   Begin VB.Image Image1 
      Height          =   720
      Left            =   4320
      Picture         =   "Login_form.frx":E906
      Top             =   0
      Width           =   720
   End
   Begin VB.Label Label2 
      BackStyle       =   0  'Transparent
      Caption         =   "          Password:"
      BeginProperty Font 
         Name            =   "MS Sans Serif"
         Size            =   8.25
         Charset         =   0
         Weight          =   700
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      ForeColor       =   &H8000000E&
      Height          =   375
      Left            =   -120
      TabIndex        =   1
      Top             =   1440
      Width           =   1695
   End
   Begin VB.Label Label1 
      BackStyle       =   0  'Transparent
      Caption         =   "         Username:"
      BeginProperty Font 
         Name            =   "MS Sans Serif"
         Size            =   8.25
         Charset         =   0
         Weight          =   700
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      ForeColor       =   &H8000000E&
      Height          =   375
      Left            =   -120
      TabIndex        =   0
      Top             =   720
      Width           =   1695
   End
End
Attribute VB_Name = "Login_form"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Private Sub cmdClear_Click()
txtName.Text = " "
txtpassword.Text = " "
End Sub

Private Sub cmdLogin_Click()
Dim usrname As String
Dim psword As String
Dim usernam As String
Dim pssword As String
Dim msg As String
If (txtName.Text = "admin") And (txtpassword.Text = "arnabbca") Then
 Login_form.Hide
 frmLibrary_admin.Show
Else
 Register.Adodc1.Refresh
 usrname = txtName.Text
 psword = txtpassword.Text
 Do Until Register.Adodc1.Recordset.EOF
 If Register.Adodc1.Recordset.Fields("Username").Value = usrname And Register.Adodc1.Recordset.Fields("Password").Value = psword Then
 Login_form.Hide
 frmLibrary.Show
 Exit Sub
 Else
 Register.Adodc1.Recordset.MoveNext
 End If
 Loop
 msg = MsgBox("Invalid password, try again!", vbOKCancel)
 If (msg = 1) Then
 Login_form.Show
 txtName.Text = " "
 txtpassword.Text = " "
 Else
 End
 End If
End If
End Sub

