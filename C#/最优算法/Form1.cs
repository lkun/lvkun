using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;

namespace 最优算法
{
    public partial class 最有调度算法 : Form
    {
        public 最有调度算法()
        {
            InitializeComponent();
        }
        int m1, m2, m3, m4;
        //int m4 = 0;
        private void textBox4_TextChanged(object sender, EventArgs e)
        {
            // m4 = Convert.ToInt32(textBox4.Text);
            //m4 = textBox4.Text;
            int m4 = Convert.ToInt32(textBox4.Text);
            //m4 = textBox2.Text + textBox3.Text;
        }

        private void textBox5_TextChanged(object sender, EventArgs e)
        {

        }


        private void textBox6_TextChanged(object sender, EventArgs e)
        {

        }


        private void textBox1_TextChanged(object sender, EventArgs e)
        {
            if (this.textBox1.Text != "")
            {
                // m1 = textBox1.Text;
                m1 = Convert.ToInt32(textBox1.Text);
            }

        }

        private void textBox2_TextChanged(object sender, EventArgs e)
        {
            if (this.textBox2.Text != "")
            {
                //m2 =textBox2.Text;
                m2 = Convert.ToInt32(textBox2.Text);
            }

        }
        private void textBox3_TextChanged(object sender, EventArgs e)
        {
            if (this.textBox3.Text != "")
            {
                // m3 = textBox3.Text;
                m3 = Convert.ToInt32(textBox3.Text);
            }


        }

        private void 确定_Click(object sender, EventArgs e)
        {
            //if (textBox2.Text == "0" || textBox11.Text == "0" || textBox17.Text == "0")
            //    MessageBox.Show("进程服务时间不能为0", "错误", MessageBoxButtons.OK);
            //else
            //{
            //    output objoutput = new output();
            //    objoutput.Show();
            //}
            int m1 = Convert.ToInt32(textBox1.Text);

            int m2 = Convert.ToInt32(textBox2.Text);

            int m3 = Convert.ToInt32(textBox3.Text);

            int m12 = Convert.ToInt32(textBox12.Text);
            int m11 = Convert.ToInt32(textBox11.Text);
            int m18 = Convert.ToInt32(textBox18.Text);
            int m17 = Convert.ToInt32(textBox17.Text);

            textBox4.Text = Convert.ToString(m3 + m2);
            textBox5.Text = Convert.ToString(m3 + m2 - m1);
            textBox6.Text = Convert.ToString((m3 + m2 - m1) / m2);
            textBox10.Text = Convert.ToString(m3 + m2);
            textBox9.Text = Convert.ToString((m3 + m2) + m11);
            textBox8.Text = Convert.ToString((m3 + m2 + m11) - m12);
            textBox7.Text = Convert.ToString(((m3 + m2 + m11) - m12) / m11);
            textBox16.Text = Convert.ToString((m3 + m2) + m11);
            textBox15.Text = Convert.ToString(((m3 + m2) + m11) + m17);
            textBox14.Text = Convert.ToString((((m3 + m2) + m11) + m17) - m18);
            textBox13.Text = Convert.ToString(((((m3 + m2) + m11) + m17) - m18) / m17);
        }

        private void 取消_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void panel1_Paint(object sender, PaintEventArgs e)
        {

        }
    }
}
