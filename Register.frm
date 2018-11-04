VERSION 5.00
Object = "{67397AA1-7FB1-11D0-B148-00A0C922E820}#6.0#0"; "MSADODC.OCX"
Begin VB.Form Register 
   BorderStyle     =   0  'None
   Caption         =   "Registration Form"
   ClientHeight    =   3090
   ClientLeft      =   6825
   ClientTop       =   3450
   ClientWidth     =   5205
   Icon            =   "Register.frx":0000
   LinkTopic       =   "Form2"
   Picture         =   "Register.frx":1982
   ScaleHeight     =   3090
   ScaleWidth      =   5205
   ShowInTaskbar   =   0   'False
   Begin MSAdodcLib.Adodc Adodc1 
      Height          =   330
      Left            =   240
      Top             =   2760
      Visible         =   0   'False
      Width           =   2655
      _ExtentX        =   4683
      _ExtentY        =   582
      ConnectMode     =   0
      CursorLocation  =   3
      IsolationLevel  =   -1
      ConnectionTimeout=   15
      CommandTimeout  =   30
      CursorType      =   3
      LockType        =   3
      CommandType     =   2
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
      RecordSource    =   "UserInfo"
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
   Begin VB.CommandButton cmdCancel 
      BackColor       =   &H0080FF80&
      Caption         =   "Cancel"
      Height          =   495
      Left            =   3840
      MaskColor       =   &H0080FF80&
      Style           =   1  'Graphical
      TabIndex        =   6
      Top             =   2160
      Width           =   1095
   End
   Begin VB.CommandButton cmdClear 
      BackColor       =   &H0080FF80&
      Caption         =   "Clear"
      Height          =   495
      Left            =   2280
      MaskColor       =   &H0080FF80&
      Style           =   1  'Graphical
      TabIndex        =   5
      Top             =   2160
      Width           =   1215
   End
   Begin VB.CommandButton cmdConfirm 
      BackColor       =   &H0080FF80&
      Caption         =   "Confirm"
      Height          =   495
      Left            =   720
      MaskColor       =   &H0080FF80&
      Style           =   1  'Graphical
      TabIndex        =   4
      Top             =   2160
      Width           =   1215
   End
   Begin VB.TextBox txtpassword 
      Height          =   375
      IMEMode         =   3  'DISABLE
      Left            =   2160
      PasswordChar    =   "*"
      TabIndex        =   1
      Top             =   1200
      Width           =   2655
   End
   Begin VB.TextBox txtName 
      Height          =   375
      Left            =   2160
      TabIndex        =   0
      Top             =   480
      Width           =   2655
   End
   Begin VB.Label Label2 
      BackStyle       =   0  'Transparent
      Caption         =   "Enter Your Password"
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
      Left            =   240
      TabIndex        =   3
      Top             =   1320
      Width           =   1935
   End
   Begin VB.Label Label1 
      BackStyle       =   0  'Transparent
      Caption         =   "Enter Your Name"
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
      Left            =   240
      TabIndex        =   2
      Top             =   600
      Width           =   1695
   End
End
Attribute VB_Name = "Register"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Private Sub cmdCancel_Click()
End
End Sub

Private Sub cmdClear_Click()
txtName.Text = " "
txtpassword.Text = " "
End Sub

Private Sub cmdConfirm_Click()
If MsgBox("Are you sure you want to save?", vbYesNo, "Save") = vbYes Then
With Adodc1
    .Refresh
    .Recordset.AddNew
    .Recordset.Fields("Username") = txtName.Text
    .Recordset.Fields("Password") = txtpassword.Text
    .Recordset.Update
    .Refresh
End With
End If
Register.Hide
Login_form.Show

End Sub
